<?php
// echo $_POST['list'];
// $i=0;
// while ($i<count($list)+1) {
//     if (in_array($list[$i], $list)==0) {
//         echo 'call!';
//     }
//     $i=$i+1;
// }
// echo $_POST['contents'];
$list = scandir('./list');
$index= count($list)-1;
$a = 'list/'.$index.'.txt';
file_put_contents($a, $_POST['list']);
$b = 'contents/'.$index.'.txt';
file_put_contents($b, $_POST['contents']);
header('Location: /index.php?id='.count($list));
?>