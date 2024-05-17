<?php
require_once "app.php";
$id = $_GET['id'];

if (isset($_POST["submit"])) {
    $judul_lagu = $_POST['judul_lagu'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];

    $sql = "UPDATE tb_hip_hop SET `judul_lagu`='$judul_lagu',`artist`='$artist',`album`='$album',`genre`='$genre'WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: tb_hiphop.php?msg=Data updated successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <title>Update Data Lagu</title>

        <style>
        h1 {
            text-align :center;
        }
        select {
            width : 100%;
            
        }
        input[type=text] {
            width : 100%;
            border : 1px solid;
            padding : 5px;
            
        }
        .content {
            text-align : center;
            padding : 20px;
            
        }
        div {
            margin : 10px;
        }
        <</style>
    </head>

    <body>

        <div class="content">
            <div class="text-center mb-4">
                <h3>Edit User Information</h3>
                <p class="text-muted">Click update after changing any information</p>
            </div>

            <?php
            $sql = "SELECT * FROM `tb_hip_hop` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $v = mysqli_fetch_assoc($result);
            ?>

            <div class="content d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">judul lagu:</label>
                            <input type="text" class="form-control" name="judul_lagu" value="<?php echo $v['judul_lagu'] ?>">
                        </div>

                        <div class="col">
                            <label class="form-label">artist:</label>
                            <input type="text" class="form-control" name="artist" value="<?php echo $v['artist'] ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">album:</label>
                        <input type="text" class="form-control" name="album" value="<?php echo $v['album'] ?>">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Genre</label>
                <select name="genre"value="<?php echo $v['genre']?>">
                    <option value="Hip-Hop">Hip-Hop</option>
                    <option value="Pop">Pop</option>
                    <option value="R&B">R&B</option>
                </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="tb_hiphop.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>

    </html>