<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pengulangan</title>
</head>
<body>
    
<table border="2"> <!--border buat tingkat ketebalan siluarnya-->
    <?php for($baris = 1; $baris <= 5; $baris++): ?>
    <tr>
    <?php for($kolom = 1; $kolom <= 10; $kolom++): ?>
    <td><?= $baris; ?>.<?= $kolom; ?></td>
    <?php endfor; ?>
    </tr>
    <?php endfor; ?> 

    <tr>
        <td>2.1</td>
        <td>2.2</td>
        <td>2.3</td>
        <td>2.4</td>
        <td>2.5</td>
    </tr>
    <tr>
        <td>3.1</td>
        <td>3.2</td>
        <td>3.3</td>
        <td>3.4</td>
        <td>3.5</td>
    </tr>
</table>
</body>
</html>