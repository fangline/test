<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=ch10";
$pdo=new PDO($dsn,"root","");

function redirect($dist){
    header("location:".$dist);
}
$err=[
    0=>"",
    1=>"欄位不可空白",
    2=>"長度需要在4~12",
    3=>"首字需大寫",
    4=>"不可有非英數字字元",
    5=>"此帳號已被使用",
    6=>"長度在4-12字元之間並且不可有非英數字而且首字要大寫"
];

/*
val(['null','len','spc']);


return [1,0,1]
*/


function val($val,$str){
    global $pdo;
    $result=array();
if(is_array($val)){
 foreach($val as $fn){
     switch($fn){
        case 'null':
        if($str==""){
            $result['null']=1;
          }
        break;
        case 'len':
        if(strlen($str)<4 or strlen($str)>12){
            $result['len']=2;
          }          
        break;
        case 'spc':
        for($i=0;$i<strlen($str);$i++){
            $test=ord(mb_substr($str,$i,1,'utf8'));
            if(!(($test>=48 && $test <= 57) or ($test>=65 && $test <= 90) or ($test >= 97 && $test <= 122))){
                $result['spc']=4;
            }
        }
        break;
        case 'upper':
        if(!($str==ucfirst($str))){
            $result['upper']=3;
          }
        break;
        case 'double':
        $sql="select * from user where acc='$str'";
        //echo $sql;
        $row=$pdo->query($sql)->fetch();
        if($str==$row['acc']){
            $result['double']=5;
        }
        break;
        default:
        echo "你打錯字了吧大概";
     }
 }
}else{

    echo "請提供陣列參數";
}

return $result;
}
?>