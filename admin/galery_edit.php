<?php include '_header.php';
error_reporting(0);
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Ubah Data Galeri</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Galeri</h5>

            <?php
            $id = $_GET['id'];
            $gambar = $_POST['gambar'];
            $user = $_POST['id_user'];
            
            $keterangan = $_POST['keterangan'];            
            $data = mysqli_query($con, "SELECT * FROM gallery INNER JOIN user ON user.id_user = gallery.id_user WHERE id = '$id'");

            $row = mysqli_fetch_array($data);
            ?>
            <form action="proses_galery_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
                    <div class="form-group">
                        <label for="">Gambar</label><br>
                        <img src="<?= "img_galery/" . $row['gambar'] ?>" width="70" height="70">
                        <input name="gambar" type="file" id="gambar" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan"
                            value="<?= $row['keterangan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">User</label>
                        
                        <select name="user" class="form-control">
                            <?php
                            
                            $tampil = mysqli_query($con, "SELECT * FROM user");
                            if ($row['user'] == 0) {
                                echo "<option value=0 selected>- Pilih user -</option>";
                            }

                            while ($edit = mysqli_fetch_array($tampil)) {
                                if ($row[4] == $edit[0]) {
                                    echo "<option value=$edit[0] selected>$edit[1]</option>";
                                } else {
                                    echo "<option value=$edit[0]>$edit[1]</option>";
                                }

                                
                                
                               
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-primary ">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./content -->
<?php include '_footer.php'; ?>
