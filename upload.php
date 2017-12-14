<?php
//echo getcwd() . "\n";
//$dir = "tkiley1/public_html/photos/";
//echo move_uploaded_file($_FILES["image"]["tmp_name"], $dir. $_FILES["image"]["name"]);

print_r($_GET);
print_r(array_keys($_GET));
$fname = array_keys($_GET)[0];
$fname = "./".$fname;
echo $fname;
if (!file_exists($fname)) {
    mkdir($fname, 0777, true);
}
$uploaddir = $fname."/";
//$uploaddir = './photos/';
$uploadfile = $uploaddir . basename($_FILES['image-file']['name']);

echo "<p>";

if (move_uploaded_file($_FILES['image-file']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}

echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";

?>
