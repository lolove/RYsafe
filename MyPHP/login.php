<?php
header('Content-Type: application/json; charset=UTF-8');

$arr[] = openfile();
print_r($arr[0][0][0].' ');
print_r($arr[0][0][1].' ');
print_r($arr[0][0][2]);

function login($JsonData, $datalist)
{

    if ($JsonData['Email'] == $datalist['email']) {
        if ($JsonData['Password'] == $datalist['password']) {
            return 'success';
        }
        return 'error password';
    }
    return 'no members';
}

function openfile()
{
    @$datalist['email'] =  $_POST['email'];
    @$datalist['password'] =  $_POST['password'];

    $myfile = fopen('../DataSet/members.json', 'r') or die("Unable to open file!");
    while (!feof($myfile)) {
        $data = fgets($myfile);
        $JsonData = json_decode($data, true);
        if( login($JsonData, $datalist) == 'success'){
            $arr[] = [getRole($JsonData) , $JsonData['UserId'] , $JsonData['License'] ];
            return $arr;
        }
    }
}

function getRole($JsonData){
    if($JsonData['License']!= null){
        return 'Driver';
    }
    return 'Costumer';
}