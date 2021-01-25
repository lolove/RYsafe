<?php
header('Content-Type: application/json; charset=UTF-8');
@$carid =  $_POST['carid'];
$TimeListfile = fopen('../DataSet/CarTimeList.json', 'r+') or die("Unable to open file!");
while (!feof($TimeListfile)) {
    $data = fgets($TimeListfile);
    $JsonTime = json_decode($data, true);
    $green=0;$yellow=0;$red=0;$blue=0;
    if(isset($JsonTime['License'])?$JsonTime['License']:null == $carid){
        foreach($JsonTime['Event'] as $item)
        {
            switch($item['Ishealthy'])
            {
                case '1':
                    $green++;
                    break;
                case '2':
                    $yellow++;
                    break;
                case '3':
                    $red++;
                    break;
                case '4':
                    $blue++;
                    break;
            }
        }
        echo json_encode(array($green,$yellow,$red,$blue),JSON_UNESCAPED_UNICODE);
    }
    
}
fclose($TimeListfile);
?>