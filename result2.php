<?php
require 'connection.php';
$count=0;
$name1=$_GET['name2'];
$person=$db->find(['manager'=>$name1],['projectName'=>1]);
foreach ($person as $per) 
{
// print_r($per['projectName']);
// echo "<br>";
$count=$count+1;

}
echo $count;
?>