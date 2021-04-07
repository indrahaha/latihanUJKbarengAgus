<?php 
    $z='sukses';
    $x= "Sukses : $z";
    $angka='123456';
    $angkaFloat=12.05;
    $hasil=$angka + $angkaFloat;

    //contoh pertama
    $dataArray = ['Agus', 'Fatul', 'Sena', 'Abi'];
    $ArrayDenganVariable=["$z","$angka","$angkaFloat","$hasil"];
    // contoh kedua
    $dadtaArray2 = array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- struktur data php string, integer , float -->
    <p><?php echo "$x".'$x'."<div> $angka</div>"; ?></p>
    <br>
    <p>hasilnya <?php echo "$hasil"; ?></p><br>
    <?= 'hasilnya tidak pakai echo'.$angka.' float '.$angkaFloat ?><br>


    <!-- struktur data php array contoh pertama -->

    <!-- cara menggunakan/memanggil data array -->
    <?php foreach($dataArray as $data) : ?>
        <p> <?php echo $data; ?></p>
        <?php endforeach; ?>
        <hr>
        <?php foreach($dataArray as $data) { ?>
        <p> <?php echo $data; ?></p>
        <?php }?>
        <hr>

        <?php foreach($dataArray as $data) : ?>
        <p> <?= $data; ?></p>
        <?php endforeach; ?>
            <hr>

        <!-- contoh pakai for -->
        <?php for($i = 0; $i< count($dataArray); $i++) : ?>
        <?= $dataArray[$i];?>
        <?php endfor ?>
        <hr>

        <!-- struktur data php array contoh ke 2 -->
        <?php foreach($ArrayDenganVariable as $data) : ?>
        <p> <?php echo $data; ?></p>
        <?php endforeach; ?>
        <hr>

        <?= $dataArray[2];?>
</body>
</html>