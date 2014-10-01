<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$json = $_GET['data'];
$data = json_decode($json);

# export to csv file
$fp = fopen('client-points.csv', 'w');
foreach($data as $cell) {
    fputcsv($fp, $cell);
}
fclose($fp);

?>
