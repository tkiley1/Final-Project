<?php
$path = $_POST['path'];
$name = $_POST['name'];
    $new = "void";
    $tmp = str_replace("http://weblab.cs.uml.edu/~tkiley1/", "", $path);
   // $path = "./photos/FlyMuf.png"
    $tmp = str_replace("%20", " ", $tmp);
    $tmp = "./".$tmp;
    //echo(getcwd());
    if( file_exists($tmp) ){
	echo("\nFile Deleted Successfully");
	unlink($tmp);
        }
    exit;
?>
