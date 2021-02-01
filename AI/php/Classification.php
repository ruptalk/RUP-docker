<?php
exec("python3 /var/www/html/py/predict.py ",$output);

$response=array();
$response["success"]=$output[0];
echo json_encode($response);
?>
