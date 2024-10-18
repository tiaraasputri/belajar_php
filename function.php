<?php
    function salam($nama, $pembelajaran){
        return "Selamat Datang di" . $pembelajaran . "," . $nama;
    }

    function hitung_uang($nominal, $jumlah){ //disini pake koma
        $num = $nominal * $jumlah;
        $string_return = "Rp" . number_format($num, 0, ',', '.'); //biar jadi format uang, 0 nunujukin dia gapake desimal
        return $string_return;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1><?php echo salam(' Azma Nuzula Laila', ' Belajar Programming'); ?></h1>
    <h3><?php echo hitung_uang(50000, 5); ?></h3> <!--Jadi disini juga pake koma-->
</body>
</html>