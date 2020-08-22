<?php include 'header.php'; ?>

<?php
function tambah($koneksi)
{
    if (isset($_POST['input_biodata'])) {
        $id = uniqid();
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama_user'];
        $tpt_lahir = $_POST['tempat_lahir'];
        $tanggal = $_POST['tgl_lahir'];
        $jk = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];

        $foto = $_FILES["foto"]["name"];
        if (move_uploaded_file($_FILES['foto']['tmp_name'], "upload/biodata/" . $_FILES['foto']['name'])) {
            echo "Gambar Berhasil di upload";
        } else {
            echo "Gambar Gagal diupload";
        }

        $query_input = mysqli_query($koneksi, "INSERT INTO biodata VALUES(md5('$id'),'$nama','$tanggal','$tpt_lahir','$jk','$alamat','$foto','$id_user')");

        if ($query_input) {
            echo '<script>alert("data berhasil di input")
            window.location.href="biodata_user.php";
            window.history.back();
            </script>';
        } else {
            echo '<script>alert("data gagal di input")
            window.location.href="kategori.php";
            </script>';
        }
    }

?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form Data Kategori</h4>
                            <p class="card-description">
                                Masukkan Kategori
                            </p>

                            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih User</label>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="id_user">
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                        <option value="autor">Autor</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Nama User</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama User" name="nama_user" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Tempat Lahir" name="tempat_lahir" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="exampleInputName1" placeholder="Name" name="tgl_lahir" value="" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Laki-Laki</label>
                                    <input type="radio" class="form-control" id="exampleInputName1" placeholder="Name" name="jenis_kelamin" value="L" required>
                                    <label for="exampleInputName1">Perempuan</label>
                                    <input type="radio" class="form-control" id="exampleInputName1" placeholder="Name" name="jenis_kelamin" value="P" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputName1">Alamat</label>
                                    <textarea name="alamat" id="" class="form-control" placeholder="Masukkan Alamat Anda"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>


                                <button type="submit" class="btn btn-success mr-2" type="submit" name="input_biodata">Submit</button>
                                <button class="btn btn-light" type="reset">Reset</button>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- function menampilkan data di table -->
                <?php
                function tampil_data($koneksi){
                    $sql =  "SELECT * FROM biodata";
                    $query = mysqli_query($koneksi, $sql);
                ?>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Biodata</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-border data">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>tempat Lahir</th>
                                                <th>Alamat</th>
                                                <th>foto</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($query)) { ?>

                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $data['nama'] ?></td>
                                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                                    <td><?php echo $data['tanggal_lahir'] ?></td>
                                                    <td><?php echo $data['tempat_lahir'] ?></td>
                                                    <td><?php echo $data['alamat'] ?></td>
                                                    <td>
                                                        <a href="upload/biodata/<?php echo $data['foto'] ?>" target="blank" class="btn btn-info">foto</a>
                                                    </td>

                                                    <td>
                                                        <a href="edit_user.php?aksi=<?php echo $data['id_biodata'] ?>" class="btn btn-primary">Edit</a>
                                                        <a href="biodata_user.php?aksi=delete&id=<?php echo $data['id_biodata']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- close table -->
            </div>
        </div>
    </div>

<?php }
            } ?>




<?php
function hapus($koneksi)
{

    if (isset($_GET['id']) && isset($_GET['aksi'])) {
        $id = $_GET['id'];

        $query_hapus = mysqli_query($koneksi, "DELETE FROM biodata WHERE id_biodata='$id'");
        if ($query_hapus) {
            if ($_GET['aksi'] == 'delete') {
                echo '<script>alert("Data Berhasil dihapus")
        window.location.href="biodata_user.php";
        </script>';
            }
        } else {
            echo '<script>alert("data gagal di hapus")</script>';
        }
    }
}
?>

<?php

// logika proses aksinya
if (isset($_GET['aksi'])) {
    switch ($_GET['aksi']) {
        case "create":
            tambah($koneksi);
            tampil_data($koneksi);
            break;
        case "read":
            tampil_data($koneksi);
            break;
        case "update":
            ubah($koneksi);
            tampil_data($koneksi);
            break;
        case "delete":
            hapus($koneksi);
            break;
        default:
            echo "<h3>Aksi <i>" . $_GET['aksi'] . "</i> tidak ada!</h3>";
            tambah($koneksi);
            tampil_data($koneksi);
    }
} else {
    tambah($koneksi);
    tampil_data($koneksi);
}

?>

<?php include 'footer.php'; ?>
</body>

</html> 