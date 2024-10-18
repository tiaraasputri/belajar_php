<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>
<body>

    <?php
    //Pengulangan for, si dollar nya didalam for.  Trs di dolar ++ nya juga didalem
    for($i = 0; $i < 5; $i++){
        echo "<p>Ini pengulangan ke " . $i . "</p>";
    }
    ?>

<hr/>
    <?php
    //pengulangan while, si dolarnya harus diluar while. Trs di dolar ++ nya juga diluar
    $a = 0;
    while($a < 5){
        echo "<p>Ini pengulangan ke " . $a . "</p>";
        $a++;
    }
    ?>

<!--FOR DAN WHILE HASILNYA SAMA AJA, CMN DIA TUH NANTI BEDA STRUKTUR PENULISAN AJA, TAPI BIASANYA YG DIPAKE YG FOR
for sama do dia langsung pengkodisian-->

<hr/>
    <?php
    //pengulangan do while, melakukan dulu baru pengkondisian
    $b = 6;
    do{
        echo "<p>Ini pengulangan ke " . $b . "</p>";
        $a++;
    }while($b < 5);
    /*dia tuh nanti yg keluarnya pengulangan ke 6v nya sekali aja, karena dia ngelakuin dulu yg si echo. Nah baru pengkodisian 
    yg while b lebih kecil dari 5. jadi dia nanti cmn sekali aja yg si 6 aja. karena valuenya dia angka 6*/
    ?>
</body>
</html>