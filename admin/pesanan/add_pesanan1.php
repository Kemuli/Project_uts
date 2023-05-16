<html>
<head>
    <title>Add Users</title>

    <style>
        input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
</head>
 
<body>
    <a href="index_pesanan.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_pesanan.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr> 
                <td>nama pemesan</td>
                <td><input type="text" name="nama_pemesan"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat_pemesan"></td>
            </tr>
            <tr> 
                <td>No handphone</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr> 
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Jumlah pesanan</td>
                <td><input type="text" name="jumlah_pesanan"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>produk</td>
                <td><input type="text" name="produk_id"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $tanggal = $_POST['tanggal'];
        $nama = $_POST['nama_pemesan'];
        $alamat = $_POST['alamat_pemesan']; 
        $telepon = $_POST['no_hp'];
        $email = $_POST['email'];
        $jumlah = $_POST['jumlah_pesanan'];
        $deskripsi = $_POST['deskripsi'];
        $produk = $_POST['produk_id'];
        
        
        
        // include database connection file
        include_once("../config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pesanan (tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,produk_id) VALUES('$tanggal','$nama','$alamat','$telepon','$email','$jumlah','$deskripsi','$produk')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_pesanan.php'>View Users</a>";
    }
    ?>
</body>
</html>