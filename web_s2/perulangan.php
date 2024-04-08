<!-- <?php 

require("index.php");

// for ($i = 0; $i < count($hanum['hobi']); $i++) {
//     echo $hanum['hobi'][$i] . PHP_EOL;
// }

// $a = [
//     "katak", "kodok", "laptop", "lele", "ikan", "sate", "tidur", "pulang"
// ];

// for ($x = 0; $x < count($a); $x++) {
//     echo $a[$x] . PHP_EOL;
// }

// $i = 0;
// while ( $i <count($a) ) {
//     // echo "ini perulangan while ke-$a" . PHP_EOL;
//     echo $a[$i] . PHP_EOL;
//     $i++;
// };
// echo $key . ':' . $value . PHP_EOL;
// ?

// // foreach ($hanum["hobi"] as $hobi);
// //     for ($x = 0; $x < count($hanum['hobi']); $x++) {
// //         echo $hanum['hobi'][$x] . PHP_EOL;
// //     }
//  -->
foreach ($hanum as $key => $value) {
    if ($key === 'hobi') {
    echo "Hobi :\n";
    for ($x = 0; $x < count($value); $x++) {
        echo ($x + 1) . ". " . $value[$x] . "\n";
        }
    } else {
        echo ucfirst($key) . " : " . $value . "\n";
    }
}
// foreach ($hanum as $key => $value) {
//     if ($key === 'hobi') {
//         echo $key . ':' . PHP_EOL;
//         foreach ($value as $hobi) {
//             echo $hobi . PHP_EOL;
//         }
//     } else {
//         echo $key . ':' . PHP_EOL;
//     }
// }