<? php


$mahasiswa = [
    [
        "nim" => "23510012",
        "nama" => "Didik Imam F",
        "jurusan" => "Sistem Informasi",
        "email" => "dfauzi72@gmail.com",
        "img" =>  "img1.png"
    ],


];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan1.php?nama=<?php echo $mhs['nama']; ?>&nim=<?php echo $mhs['nim']; ?>&jurusan=<?php echo $mhs['jurusan']; ?>&email=<?php echo $mhs['email']; ?>&img=<?php echo $mhs['img']; ?>" > <?php echo $mhs['nama']; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
 <?php

$nama = $_GET['nama'];
$nim = $_GET['nim'];
$jurusan = $_GET['jurusan'];
$email = $_GET['email'];
$img = $_GET['img'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $img; ?>" alt="">
    <h1><?= $nama; ?></h1>
    <h1><?= $nim; ?></h1>
    <h1><?= $jurusan; ?></h1>
    <h1><?= $email; ?></h1>
</body>
</html>