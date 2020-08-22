<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Biodata</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<center>
<form action="" method="POST" enctype="multipart/form-data">
        <label for="">Nama Lengkap :</label>
        <input type="text" placeholder="Masukkan Nama Anda" name="nama_lengkap">
        <br>

        <label for="">Tanggal Lahir :</label>
        <input type="date" name="tgl">
        <br>

        <label for="">Tempat Lahir :</label>
        <input type="text" name="tempat_lahir">
        <br>

        <label for="">Jenis Kelamin :</label>
        <input type="radio" name="Jenis_Kelamin" value="Laki-Laki"> Laki-Laki
		<input type="radio" name="Jenis_Kelamin" value="perempuan"> Perempuan
        <br>

        <label for="">Hobby :</label>
		<input type="checkbox" name="membaca" value="membaca">Membaca
		<input type="checkbox" name="memasak" value="memasak">Memasak
		<input type="checkbox" name="memancing" value="memancing">Memancing
		<input type="checkbox" name="ngoding" value="ngoding">Ngoding
        <br>
    
        <label for="">Alamat :</label>
        <textarea name="alamat" placeholder="Masukkan Alamat"></textarea>
        <br>

        <label for="">Kabupaten/kota :</label>
        <select name="kabupaten">
            <option>Pilih Kabupaten</option>
			<option value="banda_aceh">Banda Aceh</option>
			<option value="aceh_besar">Aceh Besar</option>
			<option value="aceh_barat">Aceh Barat</option>
        </select>
        <br>

        <label for="">Pendidikan :</label>
        <select name="pendidikan">
            <option>Pilih Pendidikan</option>
			<option value="sd">SD</option>
			<option value="smp">SMP</option>
			<option value="sma">SMA</option>
			<option value="s_1">S-1</option>
        </select>
        <br>

        <label for="">Pekerjaan :</label>
        <input type="text" placeholder="Masukkan pekerjaan Anda" name="pekerjaan">
        <br>

        <label for="">Agama :</label>
        <select name="agama">
            <option>Pilih agama</option>
			<option value="islam">ISLAM</option>
			<option value="kristen">KRISTEN</option>
			<option value="hindu">HINDU</option>
			<option value="budha">BUDHA</option>
			<option value="katholik">KATHOLIK</option>
        </select>
        <br>

        <label for="">Foto Diri :</label>
        <input type="file" name="foto_diri">
        <br>

        <label for="">Password :</label>
        <input type="password" placeholder="Masukkan password Anda" name="password">
        <br>

        <label for="">Username :</label>
        <input type="password" placeholder="Masukkan Username Anda" name="user_name">
        <br>

        <input type="submit" name="input" value="tampilkan">
    </form>

    <!-- proses dalam satu file -->

    <?php

        if(isset($_POST["input"])){

            $nama_lengkap=$_POST["nama_lengkap"];
            $tanggal_lahir=$_POST["tgl"];
            $tempat_lahir=$_POST["tempat_lahir"];
            $jenis_kelamin=!empty($_POST["Jenis_Kelamin"])?$_POST["Jenis_Kelamin"]:'anda belum memilih jenis kelamin';
            $hobby1=!empty($_POST["membaca"])?$_POST["membaca"]:'';
            $hobby2=!empty($_POST["memasak"])?$_POST["memasak"]:'';
            $hobby3=!empty($_POST["memancing"])?$_POST["memancing"]:'';
            $hobby4=!empty($_POST["ngoding"])?$_POST["ngoding"]:'';
            $alamat=$_POST["alamat"];
            $kabupaten_kota=$_POST["kabupaten"];
            $pendidikan=$_POST["pendidikan"];
            $pekerjaan=$_POST["pekerjaan"];
            $agama=$_POST["agama"];
            $foto_diri=$_POST["foto_diri"];
            // =$_FILES["foto"]["name"];
            // if(move_uploaded_file($_FILES['foto'][tmp_name],"image/".$_FILES['foto']['name'])){
            //     echo "Gambar berhasil diupload";
            // }else{
            //     echo "Gambar gagal diupload";
            // };

            $password=$_POST["password"];
            $username=$_POST["user_name"];

                echo "$nama_lengkap<br> 
                $tanggal_lahir<br>
                $tempat_lahir<br> 
                $jenis_kelamin<br>
                $hobby1<br>
                $hobby2<br>
                $hobby3<br>
                $hobby4<br>
                $alamat<br>
                $kabupaten_kota<br>
                $pendidikan <br> 
                $pekerjaan<br> 
                $agama<br>
                $foto_diri<br>
                $foto_diri<br> 
                $password<br>
                $username<br>";  
        }

    ?>

    <script src="js/bootstrap.js"></script></center>
</body>
</html>