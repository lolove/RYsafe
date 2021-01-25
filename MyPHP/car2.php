<?php
header('Content-Type: application/json; charset=UTF-8');
@$carid =  $_POST['carid'];
@$userid =  $_POST['uid'];
@$Clean =  $_POST['Clean'];
print_r($userid);
print_r($Clean);
$TimeListfile = fopen('../DataSet/CarTimeList.json', 'r+') or die("Unable to open file!");
while (!feof($TimeListfile)) {
    $start = ftell($TimeListfile);
    $data = fgets($TimeListfile);
    $JsonTime = json_decode($data, true);
    $result = memberfind($userid,$Clean);
    $resultEvent = array_unshift($JsonTime['Event'],$result);
    echo "times";

    $json = json_encode($JsonTime, JSON_UNESCAPED_UNICODE);
    $bytes = file_put_contents('../DataSet/CarTimeList.json', $json); 
}
fclose($TimeListfile);


function memberfind($userid,$Clean){
    date_default_timezone_set("Asia/Taipei");
    $SetData = null;

    $SetData = array(
        'UserId'=> $userid,
        'Time'=> date("H:i"),
        'Ishealthy'=> '4',
        'Discript'=>array(
            "Place"=> array(),
            "Symptom"=> array(),
            "Clean"=> $Clean
        )
    );
    print_r($SetData);
    return $SetData;
}
?>