<?php
//kondisi dengan database
    $koneksi =mysqli_connect("localhost","root","","school_data");

//kondisi isi database
    $result =mysqli_query($koneksi, "SELECT * FROM information_school");
?>
