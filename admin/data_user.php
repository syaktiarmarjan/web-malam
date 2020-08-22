<?php include 'header.php'?>

<?php if ($_SESSION['level'] == null) {
  header('location="login.php"');
}?>

    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Data User</h4>
                  <p class="card-description">
                    Masukkan Biodata Anda
                  </p>
                  <form class="forms-sample" action="proses/input_user.php" method="POST">

                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan Username Anda" name="username" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan Password Anda" name="pass" value="password" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan Email Anda" name="email" value="" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">NO HP</label>
                      <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Masukkan NO HP Anda" name="nohp" value="" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Pilih User</label>
                      <select class="form-control" id="exampleFormControlSelect2" name="level">
                        <option admin="admin">Admin</option>
                        <option value="operator">Operator</option>
                        <option value="autor">autor</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" type="submit" name="input_user">Submit</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                  </form>
                </div>
              </div>
            </div>


            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Data User</h4>
                  <div class="table-responsive">
                    <table class="table table-striped table-border data">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>No HP</th>
                          <th>Level</th>
                          <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                      <!-- proses menampilkan data dari database -->

                      <?php
                      $show_query = mysqli_query($koneksi, "SELECT * FROM user");
                      if (mysqli_num_rows ($show_query)==0){
                        echo "<tr> <td> Tidak ada Data </td> </tr>";
                      } else {
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($show_query)){ 
                    ?>

                      <tr>
                          <th scope='row'><?php echo $no; ?> </th>
                          <td><?php echo $data ['username']; ?> </td>
                          <td><?php echo $data ['email']; ?> </td> 
                          <td><?php echo $data ['nohp']; ?> </td>
                          <td><?php echo $data ['level']; ?> </td>

                          <td>
                          <a href="edit_user.php?id=<?php echo $data['id_user'] ?>" class="btn btn-primary">Edit</a>
                          <a href="" class="btn btn-danger" type="submit">View</a>
                          <a href="proses/proses_hapus.php?id=<?php echo $data
                          ['id_user'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" class="btn btn-success" type="submit">Hapus</a>
                          </td>

                      <?php
                      $no++;
                        }
                      }
                      ?>
                      </tbody>
                      </table>
              
                    <!-- <div class="form-group">
                      <label>Upload Ijazah</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Upload CV</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Upload SKKNI</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                      </div>
                    </div> -->
          
                    </div> 
            </div>
  <?php include 'footer.php'?>    
  <!-- plugins:js -->
  