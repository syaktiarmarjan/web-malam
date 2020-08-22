<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class= "container">
        <div class= "row">
            <div class= "col-md-6">
            <!-- untuk inputan nilai -->
        <form class="form-inline" action="" method="POST">
            <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only"> Nilai 1</label>
                <input type="number" class="form-control" id="staticEmail2" value="0" name="nilai_pertama">
            </div>
            <div class="form-group mx-sm-3 md-2">
                <label for="inputpassword2" class="sr-only"> Nilai 2</label>
                <input type="number" class="form-control" id="inputpassword2" value="0" placeholder="Nilai dua" name="nilai_dua">
            </div>
                <button type="submit" class="btn-primary mb-2" name="tambah"> + </button>
                <button type="submit" class="btn-danger mb-2" name="kurang"> - </button>
                <button type="submit" class="btn-warning mb-2" name="kali"> x </button>
                <button type="submit" class="btn-success mb-2" name="bagi"> : </button>
        </form>
    </div>

    <!-- prosesnya -->
    <?php
        if(isset($_POST['tambah'])){
            $nilai_p=$_POST['nilai_pertama'];
            $nilai_dua=$_POST['nilai_dua'];
            $tambah=$nilai_p+$nilai_dua;
        }else if(isset($_POST['kurang'])){
            $nilai_p=$_POST['nilai_pertama'];
            $nilai_dua=$_POST['nilai_dua'];
            $kurang=$nilai_p-$nilai_dua;
        }else if(isset($_POST['kali'])){
            $nilai_p=$_POST['nilai_pertama'];
            $nilai_dua=$_POST['nilai_dua'];
            $kali=$nilai_p*$nilai_dua;
        }else if(isset($_POST['bagi'])){
            $nilai_p=$_POST['nilai_pertama'];
            $nilai_dua=$_POST['nilai_dua'];
            $bagi=$nilai_p/$nilai_dua;
        }
    ?>
    
    <div class="col-md-6">
            <div class="alert alert-primary" role="alert">
                <?php echo"".!empty($tambah)?$tambah:''?>
            </div>
            <div class="alert alert-danger" role="alert">
                <?php echo"".!empty($kurang)?$kurang:''?>
            </div>
            <div class="alert alert-warning" role="alert">
                <?php echo"".!empty($kali)?$kali:''?>
            </div>
            <div class="alert alert-success" role="alert">
                <?php echo"".!empty($bagi)?$bagi:''?>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>   
</body>
</html>