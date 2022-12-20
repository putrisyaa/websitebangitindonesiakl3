<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
<div class="card im-box">
<h5 class="card-header">Ubah Data kategori</h5>
<div class="card-body">
<h5 class="card-title">Form Edit User</h5>
<?php
$id_user = $_GET['id'];
// $nama = $_POST['nama_user'];
// $username = $_POST['username'];
// $password = $_POST['password'];
$data = mysqli_query($con, "SELECT * FROM user WHERE id_user = '$id_user'");
$row = mysqli_fetch_array($data); ?>
<form action="proses_user_edit.php" method="POST">
<input type="hidden" name="id_user"
class="form-control" value="<?= $row['id_user'] ?>">
<div class="form-group">
<label for="">Nama</label>
<input type="text" name="nama_user"
class="form-control" id="nama_user" value="<?= $row['nama_user']
?>">
</div>
<div class="form-group">
<label for="">Username</label>
<input type="text" name="username"
class="form-control" id="username" value="<?= $row['username']
?>">
</div>
<div class="form-group">
<label for="">Password</label>
<input type="password" name="password"
class="form-control" id="password" value="<?= $row['password']
?>">
</div>
<div class="form-group">
<button type="submit" name="submit"
class="btn btn-primary ">Submit</button>
</div>
</form>
</div>
</div>
</div>
<!-- ./content -->
<?php include '_footer.php';