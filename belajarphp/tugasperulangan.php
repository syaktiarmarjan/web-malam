<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN</title>
</head>
<body>
    <center>
        <h2>Menampilkan Bilangan Genap :</h2>
    <?php
    // menampilkan bilangan genap
    for ($bil=1; $bil<=20; $bil++){
        if (($bil%2) == 0){
            echo "$bil adalah bilangan genap<br>";
        }
    }
    ?>

    <hr>

    <h2>Menampilkan Bilangan Ganjil :</h2>
    <?php
    // menampilkan bilangan ganjil
    for ($bil=1; $bil<=20; $bil++){
        if (($bil%2) == 1){
            echo "$bil adalah bilangan ganjil<br>";
        }
    }

    ?>

    <hr>

    <h2>Menampilkan Bilangan looping kali 2 :</h2>
    <?php
    // Menampilkan Bilangan looping kali 2
    for ($bil=2; $bil<=64; $bil*=2){
        echo "$bil<br>";   
    }
    ?>

    <hr>

    <h2>Menampilkan Bilangan looping kali 2+1 :</h2>
    <?php
    // Menampilkan Bilangan looping kali 2+1
    for ($bil=2; $bil<=64; $bil*=2){
        echo "$bil<br>";   
    }
    
    ?>

    </center>
    
</body>
</html>