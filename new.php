<?php


session_start();    

$list = "hussam,yasser,bassem,ahmed,ali";
$arr=explode(",",$list);    
echo"<pre>";


var_dump($arr);


echo "<br/>";
//$content=implode(",",$arr);

//if(file_put_contents("storage.txt",$content))
if(file_put_contents("storage.txt",json_encode($arr,JSON_PRETTY_PRINT)))

echo "done! saved";


echo "<br/>";
//$val=file_get_contents("storage.txt");;

$val=json_encode(file_get_contents("storage.txt"));

echo $val;
$_SESSION["content"]=$val;

