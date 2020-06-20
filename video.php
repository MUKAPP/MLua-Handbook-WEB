<?php
$file = 'video.txt';
$cbody = file($file);
for($i=0;$i<count($cbody);$i++){
echo $cbody[$i];echo "<br>";
}
?>