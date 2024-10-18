<?php
//Ini single komentar
# ini jga buat komentar single

/**
 * ini komen line 1
 * ini komen line 2
 * dsb ini line 3DG
 */

 // STANDAR OUTPUT
 //menggabungkan dua string gunakan titik . (dot)

 //untuk buat jadi ke line selanjut di browser pake <br/>
 // kalo di terminal pake \n diakhir kata
 //ini untuk menampilkan kalimat atau string
echo "Tiara Anjani Suhartono Putri" . " (menggunakan echo)\n";

echo "<br/>";

//cara kedua untuk menampilkan string
print "Tiara Anjani Suhartono Putri" . "(menggunakan print)\n";

//print_r adalah fungsi build-in (kek dari sananya) dari PHP
//cara ketiga bisa digunakan untuk menampilkan data String, array,dsb 
print_r ("Tiara Anjani Suhartono Putri (menggunakan print_r)\n");

//var_dump adalah fungsi build-in dari PHP
//cara ketiga khusus untuk analisa data / untuk programmer
//kalo yg var_dump dia ada ngitung jumlah stringnya ada berapa
var_dump("Tiara Anjani Suhartono Putri (Menggunakan var_dump)");

echo "<br/>";
//kalo mau nyatuin 2 string jadi  1 line
$String1 = "Tiara Anjani Suhartono";
$String2 = "(Menggunakan variable terpisah)";

echo $String1 .' '. $String2;

echo "<br/>";
echo 12; //Integrer
echo 12; //String

echo "<br/>";
echo 12 + 8 . "\n"; //integrer
echo "12" + 8; //String
//secara defailt String diconvert oleh php
//bukan cara yang rekomendasi

echo "<br/>";
$x = 4;
$y = 10;
$hasilxy = $x * $y ."\n";
echo "Hasil kali 5 x 10 = " . $hasilxy; //kalo ini jadi ga ngikutin si variabel
echo "<br/>";
echo "Hasil kali ".  $x . " x " . $y . " = " . $hasilxy ."\n";

echo "<br/>";
echo 5 + 5;
echo "\n";
echo 25 - 5;
echo "\n";
echo 25 * 5;
echo "\n";
echo 25 / 5;
echo "\n";
echo 25 % 5; //Modulus untuk mencari nilai akhir apakah ada sisa atau tidak
echo "\n";

echo "<br/>";
$a = 5;
$a = 10;
echo $a; //dia bakal keliatannya yg line terakhir
echo "\n";

echo "<br/>";
$a = 50;
$a %= 10;
echo $a;
echo "\n";


echo "<br/>";
$a = "Tiara Anjani Suhartono Putri";
$a .= " (Gunakan . untuk menggabungkan)";
echo $a;

//biasanya digunakan untuk menggabungkan tag HTML pada Logic
$a = "<div>";
$a .= "<h3>Rafil </h3>";
$a .= "<p>Adnan </p>";
$a .= "<p>Zibaroy </p>";
$a .= "</div>";
echo $a;
echo "\n";

//Boolean true / false || 1 / 0
echo "<br/>";
var_dump(1 == "1") . "\n";
var_dump(1 === "1") . "\n";

/**operator logika 
 * && = dan
 * || = or
 * ! = not
 * > = more than / lebih dari
 * < = less than / kurang dari
 * == equal / sama dengan
 * >= = more than or equal / lebih dari
 * <= = less than or equal  / kurang dari
 * != not equal
*/

echo "<br/>";
$umur = 17;
var_dump($umur < 20 && $umur >= 16) . "\n";

echo "<br/>";
$nama = "T.G";
var_dump($nama == "TG") . "\n";

echo "<br/>";
$nama = "";
var_dump($nama == "TG") . "\n";

$nama = "Tiara Anjani Suhartono Putri";
$umur = "22";
$birthday = "05-05-2002";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul> 
    <li>Nama : <?php echo $nama; ?></li>
    <li>Umur : <?php echo $umur; ?></li>
    <li>Tanggal Lahir : <?php echo $birthday; ?></li>
    <li>5 x 5 adalah : <?= 5 * 5; ?></li> <!-- contoh kalo ga mau pake echo-->
</ul>
</body>
</html>