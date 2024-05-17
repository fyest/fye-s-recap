<?php
require_once "app.php";
session_start();

$n = laguBaru($conn, $_POST);
mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_LAGU'] = "
    <script>
      alert('Gagal menambahkan data!');
      document.location.href = 'tb_hiphop.php';
    </script>";
} else {
    $_SESSION['BERHASIL_MENAMBAHKAN_LAGU'] = "
    <script>
      alert('Berhasil menambahkan data!');
      document.location.href = 'tb_hiphop.php';
    </script>
    ";
}
header("Location: /tb_hiphop.php"); 
die();


?>
<html>
<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
// function myFunction() {
//   var txt;
//   if (confirm("Press a button!")) {
//     txt = "You pressed OK!";
//   } else {
//     txt = "You pressed Cancel!";
//   }
//   document.getElementById("demo").innerHTML = txt;
// }
</script>
</html>




