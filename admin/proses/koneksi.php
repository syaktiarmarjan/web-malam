<?php
$localhost='localhost';
$user='root';
$password='';
$db='web_berita';

$koneksi= mysqli_connect($localhost, $user, $password, $db);
if ($koneksi){

}else{
    echo "<script>alert ('koneksi ke database gagal')</script>";
}

?>