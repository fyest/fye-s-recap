<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utsphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Gagal konek ke Database: " . mysqli_connect_error());
}
function getAllData($conn) {
  $sql = "SELECT * FROM tb_hip_hop";
  $result = mysqli_query($conn, $sql);

  $data = [];

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
  }

  return $data;
}

function findLagubyId ($conn, $id) {
  $sql = "SELECT * FROM tb_hip_hop WHERE id= $id LIMIT 1";
  $result = mysqli_query($conn, $sql);

  $data = [];

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      return $row;
    }
  }

  return null;
}

function laguBaru($conn, $data) {
    $sql = "INSERT INTO tb_hip_hop (
      judul_lagu, 
      artist,
      album,
      tahun_rilis,
      durasi_lagu,
      genre
    ) VALUES (
      '{$data['judul']}',
      '{$data['artist']}',
      '{$data['album']}',
      '{$data['tahun_rilis']}',
      '{$data['durasi_lagu']}',
      '{$data['genre']}'
    )";
  
    if (mysqli_query($conn, $sql)) {
      return mysqli_insert_id($conn);
    }
    return null;
  }

//   function editData($data) {
//     global $conn;
//     // Ambil data dari formulir
//     $id = mysqli_real_escape_string($conn, $data['id']);
//     $judul_lagu = mysqli_real_escape_string($conn, $data['judul_lagu']);
//     $artist = mysqli_real_escape_string($conn, $data['artist']);
//     $album = mysqli_real_escape_string($conn, $data['album']);
//     $genre = mysqli_real_escape_string($conn, $data['genre']);
//     $durasi_lagu = mysqli_real_escape_string($conn, $data['durasi_lagu']);
//     $tahun_rilis = mysqli_real_escape_string($conn, $data['tahun_rilis']);

//     // Query untuk mengupdate data
//     $sql = "UPDATE film SET 
//       judul_lagu='$judul_lagu',
//       artist='$artist', 
//       album='$album', 
//       genre='$genre', 
//       durasi_lagu='$durasi_lagu',
//       tahun_rilis='$tahun_rilis'
//       WHERE id = $id";

//     if (mysqli_query($conn, $sql)) {
//         return mysqli_affected_rows($conn);
//     } else {
//         // Handle error (e.g., display error message or log)
//         return 0;
//     }
// }

?>
