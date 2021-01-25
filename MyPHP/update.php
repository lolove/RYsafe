<?php
header('Content-Type: application/json; charset=UTF-8');

@$datalist =  $_POST['register'];
$JsonData = json_decode($datalist, true);
$UserId = isset($JsonData['UserId']) ? $JsonData['UserId'] : null;
$myfile = fopen('../DataSet/members.json', 'r+') or die("Unable to open file!");
while (!feof($myfile)) {
    $start = ftell($myfile);
    $data = fgets($myfile);
    echo $data;
    $lineJson = json_decode($data, true);
    $dataid = isset($lineJson['UserId'])?$lineJson['UserId']:null;
    if ($dataid == $UserId) {
        $end = ftell($myfile);
        fseek($myfile, $start);
        fwrite($myfile,str_repeat(' ',$end));
        fseek($myfile, $start);
        fwrite($myfile, json_encode($JsonData, JSON_UNESCAPED_UNICODE) . PHP_EOL);
    }
}
fclose($myfile);
