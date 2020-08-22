<?php

    $nim="161041020098";
    $nama="Syaktiar Marjan";
    $umur=24;
    $nilai=80.98;
    $status=FALSE;

    echo"NIM :".$nim."<br>";
    echo"Nama :" .$nama. "<br>";
    echo"Umur :" .$umur. "<br>";
    printf("Nilai :%.2f <br>", $nilai);
    if($status){
        echo"Anda Masih Kuliah";
    }
    else{
        echo"Anda Sudah Tidak Kuliah";
    }

?>