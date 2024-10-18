<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <?php 
    //if-else
    //if-else if-else
    //ternary
    //switch

    $usia = 20;
    if($usia < 30){
        //true
        echo "usia kurang dari 30";
    }else{
        //false
        echo "usia lebih dari 30";
    }

    echo "<br/>";
    echo "<hr/>";
    //ditulis usianya dari yg terkecil buat else if biar ngurut
    $umur = 21;
    if($umur == 20){
        //true or false
        echo "umur sama dengan 20";
    }else if ($umur < 20){
        //true apabila kondisi pertama tidak terpenuhi
        echo "umur kurang  dari 20";
    }else if ($umur < 30){
        //true apabila kondisi pertama tidak terpenuhi
        echo "umur kurang dari 30";
    }else{
        //false or true apabila kondisi pertama dan ketiga tidak terpenuhi
        echo "umur lebih dari 30";
    }

    //ternary
    echo "<br/>";
    echo "<hr/>";
    $old = 22;
    echo($old < 30 ? "old (umur) kurang dari 30" : "old (umur) lebih dari 30");

    //switch
    //swith ini harus sama dengan, jadi nilainya harus spesifik, dia ga ngebandingin tipe data cmn value aja
    echo "<br/>";
    echo "<hr/>";
    $bulan = 16;
    switch ($bulan){
        case 15:
        case 16:
        case 17:
        case 18:
        case 19:
            echo "Bulan dibawah 20 diatas 14";
            break;
        case 20:
            echo "Bulan 20";
            break;
        default:
            echo "Bulan tidak didefinisikan";
    }
    

    ?>
</body>
</html>