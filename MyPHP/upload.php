<?php
header('Content-Type: application/json; charset=UTF-8');

@$datalist =  $_POST['register'];
$JsonData = json_decode($datalist, true);

$myfile = fopen('../DataSet/members.json', 'r+') or die("Unable to open file!");
while(!feof($myfile)) {
  $data = fgets($myfile);
  echo $data;
  $lineJson = json_decode($data, true);
  $Id = isset($lineJson['UserId'])? $lineJson['UserId']: null;
  if(feof($myfile)){
    if($Id != null){
      $id_arr = str_split($Id);
      $uid = intval($id_arr[2].$id_arr[3])+1; 
      if($uid < 10){
        $user_id = 'U00'.$uid;
      }else{
        $user_id = 'U0'.$uid;
      }
      $JsonData['UserId']=$user_id;
      newCar($JsonData['License']);
      fwrite($myfile,PHP_EOL.json_encode($JsonData,JSON_UNESCAPED_UNICODE));
    }else{
      $JsonData['UserId']='U001';
      print_r($JsonData);
      fwrite($myfile,json_encode($JsonData,JSON_UNESCAPED_UNICODE));
    }
  }
}
fclose($myfile);

function newCar($car_id)
{
  $data="";
  $json_string = file_get_contents("../DataSet/CarTimeList.json");
      $json_string_array = explode(PHP_EOL,$json_string);
      foreach($json_string_array as $value){
        $data .= $value;
      }
      $add = array(
        'License'=>$car_id,
        'Event'=>[]
      );
      file_put_contents("../DataSet/CarTimeList.json",$data.PHP_EOL.json_encode($add,JSON_UNESCAPED_UNICODE));
}
?>


