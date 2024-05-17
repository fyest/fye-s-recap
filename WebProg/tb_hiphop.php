<?php 
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Lagu Favorite</title>

    <style>
        table {
            width: 100%;
        }
        table, th, td {
            border : 1px solid;
            border-collapse : collapse;
            padding : 10px
        }
    </style>
   
    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Nunito+Sans:opsz,wght@6..12,200&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <!-- END CDN Bootstrap -->

    <!-- CDN JQuery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
            integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="lib/jquery.waypoints.min.js"></script>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- END CDN JQuery -->
</head>
<body>

    <center><nav><h1>List Lagu Favorit</h1></nav></center>

    <header>
        
    <?php if(isset($_SESSION['BERHASIL_MENAMBAHKAN_LAGU'])) :?>
    <p><?=$_SESSION['BERHASIL_MENAMBAHKAN_LAGU']?></p>
    <?php session_unset(); ?>
    <?php endif; ?>
<div>
   <table class=" table table-striped table-dark">
    <thead class="thead-light">
        <tr>
            <th scope="col">Judul Lagu</th>
            <th scope="col">Genre</th>
            <th scope="col">Artist</th>
            <th scope="col">Album</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($p as $k => $v) : ?>
        <tr>
            <td><?= $v['judul_lagu'] ?></td>
            <td><?= $v['genre'] ?></td>
            <td><?= $v['artist'] ?></td>
            <td><?= $v['album'] ?></td>
            <td>
                <a href="<?="/lagu_detail.php?id={$v['id']}" ?>">Detail</a>
                <br>
                <a href="<?="/lagu_edit.php?id={$v['id']}" ?>">Edit</a>
                <br>
                <a href="<?="/delete.php?id={$v['id']}" ?>" onClick="return confirm('Yakin untuk menghapus data?');">Delete</a>
            </td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>

    <button type="button" class="btn btn-outline-dark"><a href="index.php">Kembali</a></button>
    <br>
    <button type="button" class="btn btn-outline-dark"><a href="lagu_tambah.php">Link Menambah Lagu Favorit</a></button>
   </table>
   </div>
</header>
</body>
</html>

<?php
mysqli_close($conn);
?>