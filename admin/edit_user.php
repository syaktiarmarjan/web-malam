<?php include 'header.php'?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Data User</h4>  
                        <p class="card-description">Masukkan Data User</p>
                        
                        <!-- query menampilkan data yang mau di update -->
                        <?php
                        $id= $_GET['id'];

                        $query_show = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");

                        if (mysqli_num_rows($query_show) ==0){
                            echo '<script>window.history.back()</script>';
                        } else {
                            $data = mysqli_fetch_assoc($query_show);
                        }
                        ?>

                        <form class="forms-sample" action="proses/proses_edit.php" method="POST">
                            <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">

                            <div class="form-group">
                                <label for="exampleInputName1">Username</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="name" name="username" value="<?php echo $data['username']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Password</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Password" value="<?php echo $data['pass']; ?>" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" value="<?php echo $data['email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">NO HP</label>
                                <input type="number" class="form-control" id="exampleInputEmail3" placeholder="NO HP" name="email" value="<?php echo $data['nohp']; ?>" required>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih User</label>
                                <?php if (empty($data['level'])) { ?>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="level" >
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                        <option value="autor">Autor</option>
                                    </select>
                                <?php } else { ?>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="level">
                                        <option <?php echo ($data['level'] == 'admin') ? 'selected' : ''?> value="admin">Admin</option>
                                        <option <?php echo ($data['level'] == 'operator') ? 'selected' : ''?> value="operator">Operator</option>
                                        <option <?php echo ($data['level'] == 'autor') ? 'selected' : ''?> value="autor">Autor</option>
                                    </select>
                                <?php } ?>
                            </div>

                            <button type="submit" class="btn btn-success mr-2" type="submit" name="update_user">Submit</button>
                            <button class="btn btn-light" type="reset">Reset</button>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>