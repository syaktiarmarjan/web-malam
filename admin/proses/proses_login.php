<?php
session_start();
include 'koneksi.php';

    if (isset($_POST['login'])){    

        $username=$_POST['username'];
        $password=md5($_POST['pass']);

        // query menampilkan username dan password
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
        $cek = mysqli_num_rows($query);
        $data = mysqli_fetch_assoc($query);

        // logika loginnya
        if ($cek > 0){
            if ($data['level'] == 'admin'){
            $_SESSION['username']= $data['username'];
            $_SESSION['level']= $data['level'];

            echo "<script> alert('Selamat Datang Admin')
            window.location.href='../index.php';
            </script>";

        }else if ($data['level'] == 'operator'){
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];

            echo "<script> alert('Selamat Datang Operator')
            window.location.href='../index.php';
            </script>";

        }else if ($data['level'] == 'autor'){
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];

            echo "<script> alert('Selamat Datang Autor')
            window.location.href='../index.php';
            </script>";
        } else {
            header("location:../login.php?pesan=gagal");
        }
    }else{
        header ("location:../login.php");
    }
}else {
    echo '<script>windpw.history.back()</script>';
}
?>


