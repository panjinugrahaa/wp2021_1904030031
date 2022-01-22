<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Selamat datang, <?php   echo "Panji Nugraha";?> </h1>
    <!-- tag html dalam php -->

    <?php echo "<h2>di pembelajaran web programming</h2>"?>
<hr>
    <h2>tipe data integer</h2>

    <?php  
    echo "Desimal : "; var_dump(123456); echo "<br>";
    echo "Octa : "; var_dump(01234); echo "<br>";
    echo "Hexa Desimal : "; var_dump(0x1a); echo "<br>";
    echo "binary : "; var_dump(0b111111); echo "<br>";
    echo "underscore di nomor : "; var_dump(1_500_000); 
        echo "<br>";
    ?>
    <hr>
    <h2>Variabel</h2>
<?php
$namadepan  = "Panji";
$namabelkn  = "Nugraha";
$mk         = "Web Programming";
$hobi       = "game";
?>

  <h4>Identitas diri</h4>
  <p>nama        : <?php echo $namadepan ." ". $namabelkn; ?></p>
  <p>mata kuliah : <?php echo $mk; ?></p>
  <p>hobi        : <?php echo $hobi; ?></p>


</body>
</html>