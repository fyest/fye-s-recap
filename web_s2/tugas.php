<?php
$hanum = [
    "nama" => "Hanum",
    "pekerjaan" => "Belum Ada",
    "pendidikan" => "S1",
    "nilai" => "A",
    "umur" => 18,
    "hobi" => [
    "main game", "denger lagu"
    ],
   ];
   foreach ($hanum as $key => $value) {
    if ($key == "hobi") {
    echo "Hobi :\n";
    foreach ($value as $index => $hobi) {
    echo ($index + 1) . ". " . $hobi . "\n";
    }
    } else {
    echo ucfirst($key) . " : " . $value . "\n";
    }
   }
   