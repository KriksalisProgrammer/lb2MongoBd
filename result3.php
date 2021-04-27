<?php
require 'connection.php';
$name1=$_GET['name3'];
$person=$db->find(['manager'=>$name1],['workers'=>1,'_id'=>0]);
foreach ($person as $per) 
{
 print_r($per['workers']);
 echo "<br>";
}
?>