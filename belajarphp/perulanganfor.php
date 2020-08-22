<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERULANGAN FOR</title>
</head>
<body>
<center> <h2> CONTOH PERULANGAN FOR :</h2>

    <?php
    // menampilkam HTML
        $a=1;
        for ($a=1; $a<=5; $a++){
    
    ?>

            <form action="">
                <label for="">Nama Pendidikan :</label>
                <input type="text"><br>
                <label for="">Jenjang pendidikan :</label>
                <input type="text"><br>
                <label for="">Tahun Masuk:</label>
                <input type="text"><br>
                <label for="">Tahun Keluar :</label>
                <input type="text">
        </form>
        <br>


    <?php
        }

    ?>


    <?php
    // Menampilkan angka
        $a=1;
        for ($a=1; $a <= 5; $a++){
            echo "$a";
        }
    ?>

    <?php
    // Menampilakan String
    $a=1;
    for ($nama=1; $nama < 10; $nama++){
        echo "Syaktiar Marjan <br>";
    }
    
    ?>

    <!-- FOREACH -->

    <?php
    // Menampilkan jumlah nilai yang sama sebanyak jumlah array
    $hewan=array(
        "ayam",
        "kambing",
        "Kucing",
        "sapi"
    );

    foreach ($hewan as $key => $data){
        echo "".$hewan[2];
    }
    ?>

    <?php
    // menampilkan jumlah angka yang dipilih dengan array sebanyak jumlah array

    $angka=array(
        1,
        2,
        3,
        4
    );

    foreach ($hewan as $key => $data){
        echo "".$angka[2]* $angka[3];
    }
    ?>

    <?php
    // menampilkan jumlah nilai yang sama sebanyak jumlah array

    $hewan=array(
        "ayam",
        "kambing",
        "kucing",
        "sapi"
    );

    foreach ($hewan as $key => $data){
        echo "".$data[1];
    }
    ?>

    </center>
    
</body>
</html>