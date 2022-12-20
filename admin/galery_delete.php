<?php
include '_config.php';

$id = $_GET['id'];

$delete = mysqli_query($con, "DELETE FROM gallery WHERE id = $id");

if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_galery.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_galery.php'
    </script>
<?php } ?>
