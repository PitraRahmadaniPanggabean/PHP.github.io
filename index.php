<?php
//kondisi dengan database
    $koneksi =mysqli_connect("localhost","root","","school_data");

//kondisi isi database
    $result =mysqli_query($koneksi, "SELECT * FROM information_school");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL DATA</title>
</head>
<body>

<h1>Daftar COA</h1>
    <a href="tambah.php";>TAMBAH DATA SISWA</a>
    
</td>
    <table border="1" cellpadding="5px">
        <tr>
    
            <th>NO</th> 
            <th>Kode COA</th>
            <th>Deskripsi COA</th>
            <th>AKSI</th>
        </tr>
        <tr>

        <?php $i=1 ;?>
        <?php while ($isi =mysqli_fetch_assoc ($result)): ?>

         <td><?php echo $i; ?> </td>
         <td><?php echo $isi ['Kode COA'] ?> </td>
         <td><?php echo $isi ['Deskripsi COA'] ?> </td>

         <td>
                <a href="ubah.php?id=<?php echo $isi ["id"] ?>">UBAH</a>|
                <a href="hapus.php?id=<?php echo $isi ["id"] ?>"
                onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini');">HAPUS</a>
            </td>


        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
     </table>
</body>
</html>