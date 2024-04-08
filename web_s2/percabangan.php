<?php
require("index.php");

 if($biodata['umur']>= 25) {
     echo $biodata['pekerjaan'] . PHP_EOL;
} elseif ($biodata['umur'] <= 7) {
         echo $hanum['hobi'][0] . PHP_EOL;
     echo $hanum['hobi'][1] . PHP_EOL;
     echo $hanum['hobi'][2] . PHP_EOL;
 }
 else {
     echo $biodata['pendidikan'];
};

 switch ($biodata['nilai']) {
    case 'A';
     echo "Sangat Baik";
     break;
    case 'B';
     echo "Baik";
     break;
     case 'C';
     echo "Cukup Baik";
     break;
     case 'D';
     echo "Kurang Baik";
    break;

     default;
  echo "Tidak Lulus";
    break;
}
