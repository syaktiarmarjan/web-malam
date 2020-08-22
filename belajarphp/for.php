<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>
<body>
    <center>
    <h2> <u>CONTOH PENULISAN FOR :</u> </h2> 

    <?php
    //    contoh pertama
        for ($i=1; $i<=10; $i++){
            echo "$i";
        }
        echo "<br><br>";

    // contoh kedua
        for ($i=1; ; $i++){
            if ($i > 10){
            break;
        }
        echo "$i";
}
    echo "<br><br>";

    // contoh ketiga
    $i=1;
    for (;;){
        if ($i>10){
        break;
    }
    echo "$i";
    $i++;
} echo "<br><br>";

    // contoh keempat
    for ($i= 1; $i <=10; print "$i", $i++);

    ?>
    </center>
    
</body>
</html>