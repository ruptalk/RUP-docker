<?php
$image_path = $_FILES["image"]["tmp_name"];

exec("python3 /var/www/html/py/test.py ".$image_path,$output);

echo "class : ".$output[0];

$response=array();
$response["success"]=$output[0];
?>
