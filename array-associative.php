<?php
//array associative array bertingkat
    $arr = [
        ["Senin", "Selasa", "Rabu"],
        ["Januari", "Februari", "Maret"],
        ["2020", "2021", "2022"],
    ];

    $dataPerson = [
        [
            "nama"=> "Azma Nuzula",
            "kota"=> "Bandung",
            "baju"=> "Hijau",
            "makanan_favorite"=> ["Rendang", "Soto", "Sambal"]
        ],
        [
            "nama"=> "Tiara Anjani",
            "kota"=> "Bandung",
            "baju"=> "Pink",
            "makanan_favorite"=> ["Pizza", "Spaghetti"]
        ],
        [
            "nama"=> "Maryam Busra",
            "kota"=> "Bandung",
            "baju"=> "Coklat",
            "makanan_favorite"=> ["Sosis", "Steak", "Roti", "Mangga"]
        ],
    ]

    // foreach($arr as $data){
    //     var_dump($data);
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-Associative</title>
</head>
<body>
    <!-- <?php foreach($arr as $data): ?>
    <ul style="margin-bottom: 24px;">
        <li>Index 1: <?= $data[0] ?> </li>
        <li>Index 2:<?= $data[1] ?> </li>
        <li>Index 3: <?= $data[2] ?> </li>
    </ul>
    <?php endforeach; ?> -->

    <!-- <?php echo $dataPerson[0]['nama']; ?> munculin nama pertama -->

    <?php foreach($dataPerson as $data): ?> <!--munculin semua data di dataperson dr nama-baju -->
        <ul style="margin-bottom: 24px;">
            <li>Nama: <?php echo $data['nama']; ?></li>
            <li>Kota: <?php echo $data['kota']; ?></li>
            <li>Baju: <?php echo $data['baju']; ?></li>
            <li>
                Makanan favorite: <!--nambahin makanan fav pake list angka-->
                <ol>
                    <?php foreach($data['makanan_favorite'] as $makanan): ?>
                        <li><?php echo $makanan; ?></li>
                    <?php endforeach; ?>
                </ol>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>