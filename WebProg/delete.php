<?php
require_once "app.php";

$id = $_GET['id'];
$sql = "DELETE FROM tb_hip_hop WHERE id=$id";
$result = mysqli_query($conn,$sql);

if ($result) {
    echo "
    <script>
        alert('Berhasil menghapus data!');
        document.location.href = 'tb_hiphop.php';
    </script>";
} else {
    echo "
    <script>
        alert('Gagal menghapus data!');
        document.location.href = 'tb_hiphop.php';
    </script>";;
}

mysqli_close($conn);
?>