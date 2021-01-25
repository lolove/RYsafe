<?php
header('Content-Type: application/json; charset=UTF-8');
@$CarId =  $_POST['carid'];
$TimeListfile = fopen('../DataSet/CarTimeList.json', 'r+') or die("Unable to open file!");
while (!feof($TimeListfile)) {
    $data = fgets($TimeListfile);

    $JsonTime = json_decode($data, true);
    if(isset($JsonTime['License'])?$JsonTime['License']:null == $CarId){
        echo $data.'|';
        break;
    }
}
fclose($TimeListfile);

$MembersFile = fopen('../DataSet/members.json', 'r+') or die("Unable to open file!");
while (!feof($MembersFile)) {
    $data = fgets($MembersFile);
    $JsonData = json_decode($data, true);
    // echo strcmp(isset($JsonData['License'])?$JsonData['License']:null,$CarId);
    if(strcmp(isset($JsonData['License'])?$JsonData['License']:null,$CarId) == 0){
        $SetData =array(
            'License'=>isset($JsonData['License'])?$JsonData['License']:null,
            'Name'=>isset($JsonData['Name'])?$JsonData['Name']:null,
            'Place'=>isset($JsonData['Place'])?$JsonData['Place']:null,
            'Symptom'=>isset($JsonData['Symptom'])?$JsonData['Symptom']:null
        );
        echo json_encode($SetData,JSON_UNESCAPED_UNICODE);
        break;
    }
}
fclose($MembersFile);
?>