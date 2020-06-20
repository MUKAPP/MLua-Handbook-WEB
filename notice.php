<?php

$url='https://v1.hitokoto.cn/?encode=text';
$html = file_get_contents($url);
echo "{<big-text-yiyan?>" . $html . "}";

$file = 'notice.txt';
$cbody = file($file);
for($i=0;$i<count($cbody);$i++){
echo $cbody[$i];echo "<br>";
}
?>
