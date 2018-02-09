<?php
$file = $_POST['filename'];
unlink('list/'.$file);
unlink('contents/'.$file);
header('Location: /index.php');
?>