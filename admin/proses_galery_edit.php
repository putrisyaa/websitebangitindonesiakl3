<?php
error_reporting(0);
include '_config.php';

$id = $_GET['id'];
$gambar = $_POST['gambar'];
$id_user = $_POST['id_user'];
$keterangan = $_POST['keterangan'];

//upload dan simpan artikel
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

if (move_uploaded_file($tmp_name, 'img_galery/' . $namafile)) {

  $update = mysqli_query($con, "UPDATE gallery SET gambar = '$namafile', keterangan='$keterangan' WHERE id ='$id'");
} else {
  $update = mysqli_query($con, "UPDATE gallery SET keterangan='$keterangan' WHERE id ='$id'");
}

//if (empty('gambar')) {
//  $update = mysqli_query($con, "UPDATE artikel SET judul ='$_POST[judul]', artikel='$_POST[artikel]', tanggal='$_POST[tanggal]', gambar='$gambar', id_kategori='$_POST[kategori]' WHERE id_artikel ='$_POST[id_artikel]'");
//} else {
//   $UploadImage($nama_file);
//  $update = mysqli_query($con, "UPDATE artikel SET judul ='$_POST[judul]', artikel='$_POST[artikel]', tanggal='$_POST[tanggal]', gambar='$namafile', id_kategori='$_POST[kategori]' WHERE id_artikel ='$_POST[id_artikel]'");
//}
if ($update) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_galery.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_galery.php'
    </script>
<?php } ?>