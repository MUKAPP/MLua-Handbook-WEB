<?php
$file = 'code2.txt';
$cbody = file($file);
for($i=0;$i<count($cbody);$i++){
echo $cbody[$i];echo "<br>";
}
$file = 'code.txt';
$cbody = file($file);
for($i=0;$i<count($cbody);$i++){
echo $cbody[$i];echo "<br>";
}
?>