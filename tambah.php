<?php 
require "koneksi.php";

//cek tombol submit
if (isset($_POST["submit"])) {

//mengambil data dari form dimasukkan ke variabel
$id = $_POST ["id"];
$image = $_POST ["image"];
$nama = $_POST ["name"];
$dateofbirth = $_POST ["dateofbirth"];
$email = $_POST ["email"];
$address = $_POST ["address"];

//query insert data
$query = "INSERT INTO siswa VALUES
    ('', '$id', '$image', '$name', '$dateofbirth', '$email', '$address')";
    mysqli_query ($koneksi, $query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA SISWA</title>
</head>
<body>
    <h1> TAMBAH DATA SISWA </h1>
    <from action="" method="post">

        <table>
            <tr>
                <td><label for="id">ID : </label></td>
                <td><input type="number" id="id" id="id" ></td>
            </tr>

            <tr>
                <td><label for="nama">NAME: </label></td>
                <td><input type="text" name="name" id="nama"></td>
            </tr>

            <tr>
                <td><label for="dateofbirth">DATE OF BIRTH : </label></td>
                <td><input type="date" dateofbirth="dateofbirth"></td>
            </tr>

            <tr>
                <td><label for="email"> EMAIL : </label></td>
                <td><input type="text" email="email"></td>

            <tr>
                <td><label for="address"> ADDRESS : </label></td>
                <td><input type="text" address="address"></td>
            </tr>

            <td></td>
            <td><button type="submit" name="submit">Tambah Data</button></td>
            </tr>
        </table>
</body>
</html>