<?php
$url='https://v1.hitokoto.cn/?encode=text';
$html = file_get_contents($url);
echo "{<text?>" . $html . "}";
?>