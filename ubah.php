<?php
require "koneksi.php";

//Mengambil id dari URL
$id = $_GET['id'];
$query = "SELECT * FROM information_school WHERE id = $id";
$data = mysqli_query($koneksi, $query);

//Cek tombol submit Ubah Data
if (isset($_POST["submit"])) {

    // Memasukkan data yang di ubah
        $id = $_POST ["id"];
        $image = $_POST ["image"];
        $name = $_POST ["name"];
        $dateofbirth = $_POST ["dateofbirth"];
        $email = $_POST ["email"];
        $address = $_POST ["address"];

    // Query Ubah Data
        $query = "UPDATE information_school SET
                id='$id',
                gambar ='$image',
                nama='$name',
                dateofbirth='$dateofbirth',
                email='$email',
                alamat='$address', WHERE id=$id ";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");

    }else{
        echo "Edit Data Gagal";

    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH DATA SISWA</title>
</head>
<body>
    <h1> UBAH DATA SISWA </h1>
        <?php while ($row =mysqli_fetch_assoc($data)):?>
        <form action="ubah.php" method="post">
            
            <!-- Element input yang tidak terlihat -->
            <!-- Untuk mendeteksi ID -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
        <table>
            <tr>
                <td><label for="id">ID : </label></td>
                <td><input type="number" id="id" id="id" value="<?php echo $row['id']; ?>"></td>
            </tr>

            <tr>
                <td><label for="name">NAME: </label></td>
                <td><input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"></td>
            </tr>

            <tr>
                <td><label for="dateofbirth">DATE OF BIRTH : </label></td>
                <td><input type="date" dateofbirth="dateofbirth" value="<?php echo $row['dateofbirth']; ?>"></td>
            </tr>

            <tr>
                <td><label for="email"> EMAIL : </label></td>
                <td><input type="text" email="email" value="<?php echo $row['email']; ?>"></td>
            </tr>

            <tr>
                <td><label for="address"> ADDRESS : </label></td>
                <td><input type="text" address="address" value="<?php echo $row['address']; ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="submit" onclick="return confirm ('APAKAH DATA INI AKAN DIUBAH ?');">UBAH DATA</button></td>
            </tr>
            <?php endwhile; ?>
        </table>
        </from>
</body>
</html>