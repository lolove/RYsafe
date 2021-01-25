<?php
header('Content-Type: application/json; charset=UTF-8');
@$UserId = $_POST['UserId'];
$SetData = array();
$TimeListfile = fopen('../DataSet/CarTimeList.json', 'r+') or die("Unable to open file!");
while (!feof($TimeListfile)) {
    $start = ftell($TimeListfile);
    $data = fgets($TimeListfile);
    $JsonTime = json_decode($data, true);
    $result = memberfind($UserId);
    $resultEvent = array_unshift($JsonTime['Event'],$result);
    echo "times";

    $json = json_encode($JsonTime, JSON_UNESCAPED_UNICODE);
    $bytes = file_put_contents('../DataSet/CarTimeList.json', $json); 
}
fclose($TimeListfile);


function memberfind($userid ){
    $MembersFile = fopen('../DataSet/members.json', 'r+') or die("Unable to open file!");
    date_default_timezone_set("Asia/Taipei");
    $SetData = null;
    while (!feof($MembersFile)) {
        $data = fgets($MembersFile);
        $JsonData = json_decode($data, true);
        if($userid == $JsonData['UserId']){
            $SetData = array(
                'UserId'=> $userid,
                'Time'=> date("H:i"),
                'Ishealthy'=> GetIsHealthy($JsonData,$userid),
                'Discript'=>array(
                    "Place"=> GetDiscript('Place',$JsonData),
                    "Symptom"=> GetDiscript('Symptom',$JsonData),
                    "Clean"=> array()
                )
            );
        }
    }
    fclose($MembersFile);
    return $SetData;
}

function GetIsHealthy($JsonData , $userid){
    if($JsonData['UserId'] == $userid){
        if(count($JsonData['Symptom']) == 0 && count($JsonData['Place']) == 0){
            return '1';
        }
        else{
            foreach( $JsonData['Symptom'] as $item){
                if($item == '發燒' || $item == '味覺、嗅覺異常' || $item == '不明原因腹瀉'){
                    return '3';
                }else{
                    //nothing
                }
                return '2';
            }
        }
    }
}

function GetDiscript($Type , $JsonData){
    switch ($Type){
        case 'Place':
            return SearchAll($JsonData['Place']);
        case 'Symptom':
            return SearchAll($JsonData['Symptom']);
    }
    return '';
}

function SearchAll($Data){
    $arr = array();
    if($Data != null){
        foreach($Data as $item){
            array_push($arr, $item);
        }
    }
    return $arr;
}


?>