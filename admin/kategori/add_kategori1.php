<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  input[type=submit] {
        background-color: #ff6f3c;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 10px 2px 1px 500px;
        cursor: pointer;
      }

      a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
    <title>Add Users</title>
</head>
 
<body>
    <a href="../../index.html">Go to Home</a>
    <br/><br/>
    
    
 
    <form action="add_kategori.php" method="post" name="form1">
        <table width="25%" border="0">
        <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Pilih Kategori</label> 
    <div class="col-8">
      <select id="select" name="nama" class="custom-select">
        <option value="shirt">Shirt</option>
        <option value="crewneck">Crewneck</option>
        <option value="longsleeve">Longsleeve</option>
        <option value="tshirt">Tshirt</option>
        <option value="jacket">Jacket</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
           
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        
        
        // include database connection file
        include_once("../config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kategori_produk(nama) VALUES('$nama')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_kategori.php'>Lanjutkan</a>";
    }
    ?>
</body>
</html>