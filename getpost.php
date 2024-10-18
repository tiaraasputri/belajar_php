<?php
    //$_GET dan $_POST adalah variabel super global
    //Variabel ini membawa banyak data yang terjadi di aplikasi

    //$_GET passing data melalui url, tp klo POST ga bisa
    // $_GET["nama"] = "Azma Nuzula";
    // $_["alamat"] = "Bandung";
    // var_dump($_GET);

    $arr = [
        [
            "nama" => "Azma Nuzula",
            "kota" => "Bandung",
            "no_telp" => 82139594
        ],
        [
            "nama" => "Nabil",
            "kota" => "Banten",
            "no_telp" => 46734857,
        ]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetPost</title>
</head>
<body>
    <ul>
        <?php foreach($arr as $person): ?>
            <li>
                <a href="./get.php?nama=<?= //<?= ini gaperlu nulis echo
                $person['nama'] ?>&kota=<?=
                $person['kota'] ?>&no_telp=<?=
                $person['no_telp'] ?>">
                    <?= $person['nama']; ?>
                </a>
            </li>
        <?php endforeach; ?>    
    </ul>

    <hr/>

    <form method="POST">
        <input type="text" name="txt_username" placeholer="username"/>
        <input type="password" name="txt_password" placeholder="password"/>
        <button type="submit">Submit</button>
    </form>

    <?php if(isset($_POST['txt_username'])): ?>
        <h3>Hallo, <?= $_POST['txt_username'] ?></h3>
        <?php endif; ?>
</body>
</html>