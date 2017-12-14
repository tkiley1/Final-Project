<?php $data = $_POST['tst'];
echo sizeof($_POST);
$f = fopen('users.txt', 'a');
echo $f;
fwrite(f, $data);
file_put_contents("users.txt",$data.PHP_EOL,FILE_APPEND);
fclose($f);
?>
