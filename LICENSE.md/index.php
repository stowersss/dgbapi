<?php
$fgc = file_get_contents("https://digibyte.io/ajax.php");
$json = json_decode($fgc, true);
$dgb = $json[0]["price_usd"];
echo "DGB: " . $dgb;
?>
