<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata with metode post</title>
</head>
<body>

    <form action="" method= "POST">
        <label for="">Nama :</label>
        <input type="text" name= "Nama_Lengkap">
        <br>
        <label for="">Tanggal Lahir</label>
        <input type="date" name= "tgl">

        <input type="submit" name= "input" value="tampilkan">
    </form>

    <!-- proses dalam satu file -->

    <?php

        if(isset($_POST ["input"])){

            $nama =$_POST["Nama_Lengkap"];
            $tanggal =$_POST["tgl"];

            echo "$nama <br> $tanggal";
        }

    ?>
    
</body>
</html>