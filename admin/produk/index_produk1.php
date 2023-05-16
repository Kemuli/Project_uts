<?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add_produk.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>kode</th> <th>nama</th> <th>harga jual</th> <th>harga beli</th> <th>stok</th> <th>jumlah pesanan</th> <th>Deskripsi</th> <th>kategori Produk</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['harga_jual']."</td>";
        echo "<td>".$user_data['harga_beli']."</td>";
        echo "<td>".$user_data['stok']."</td>";
        echo "<td>".$user_data['min_stok']."</td>";
        echo "<td>".$user_data['deskripsi']."</td>";
        echo "<td>".$user_data['kategori_produk_id']."</td>";
          
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete_produk.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>