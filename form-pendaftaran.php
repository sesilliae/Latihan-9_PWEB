<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Pengurus himataska</title>
</head>

<body>
<?php
    include ("koneksi.php");

    $query = "select * from calon_pengurus";
    $hasil = mysqli_query($koneksi, $query);
?>
    
    <h1> Tambah Calon Pengurus </h1>
    <form action="proses_insert.php" method="POST">
        Nama : <input type="text" name="nama" value=""><br/>
        NIM : <input type="text" name="nim" value=""><br/>
        Angkatan : <input type="text" name="angkatan" value=""><br/>
        Jenis Kelamin : <input type="text" name="jenis_kelamin" value=""><br/>
        Alamat : <textarea name="alamat"></textarea><br/>
        <input type="submit" value="simpan">
    </form> 
    
</body>
</html>