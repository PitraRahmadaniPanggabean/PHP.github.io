<?php
require "koneksi.php";

$id = $_GET['id'];
$hapusdatacoa = mysqli_query ($koneksi, "DELETE FROM datacoa WHERE id = '$id'");

header("location:index.php");
?>