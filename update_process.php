<?php
// echo 'id number --> '.$_POST['id'].'<br>';
// echo 'file name --> '.$_POST['file'].'<br>';
// echo 'new title --> '.$_POST['nlist'].'<br>';
// echo 'new descr --> '.$_POST['ncontents'];
file_put_contents('list/'.$_POST['file'], $_POST['nlist']);
file_put_contents('contents/'.$_POST['file'], $_POST['ncontents']);
header('Location: /index.php?id='.$_POST['id']);
?>