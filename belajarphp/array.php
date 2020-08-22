<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>

    <h1>BELAJAR ARRAY</h1>

    <?php

    $nama="syaktiar";
    $hewan=array ("kambing", "sapi", "kerbau", "ayam");
    $tumbuhan=array ("rumput", "mawar", "sawi", "bayam");
    $makanan=array ("ayam goreng", "nasi goreng","telor puyoh", "dedak");

    echo "$nama membeli $hewan[3] dan makanannya yaitu $makanan[3] <br>";

    echo "". $hewan [0][2]. $hewan [1][1]. $hewan [2][5];
    
    
    ?>
    
</body>
</html>