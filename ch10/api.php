<?php
include_once "base.php";

$do=(!empty($_GET['do']))?$_GET['do']:""; //三元運算式
//()? : ;
if(!empty($_GET['do'])){
  $do=$_GET['do'];
}else{
  $do="";
}
switch($do){
  case "reg":
    //註冊帳號功能
    $back=array();

    $acc=$_POST['acc'];
    $bstr=val(['null','len','upper','spc','double'],$acc);
    //print_r($acc_val);
    if(!empty($bstr)){
      $back['acc']=implode("-",$bstr);
      //$back[]="acc=".implode("-",$acc_val);
    }

    $pw=$_POST['pw'];
    $bstr=val(['null','len'],$pw);
    //print_r($acc_val);
    if(!empty($bstr)){
      $back['pw']=implode("-",$bstr);
    }

    if(!empty($back)){
      $ss="";
      foreach($back as $key => $v){
        $ss=$ss.$key."=".$v."&";
      }
      redirect("reg.php?".trim($ss,'&'));
      exit();
    }


    $email=$_POST['email'];
    $name=$_POST['name'];
    $birthday=$_POST['birthday'];
    $tel=$_POST['tel'];
    $addr=$_POST['city'] . $_POST['addr'];
    $identity=$_POST['identity'];

    $sql="insert into user (
      `acc`,
      `pw`,
      `email`,
      `name`,
      `birthday`,
      `tel`,
      `addr`,
      `identity`
    ) values(
      '$acc',
      '$pw',
      '$email',
      '$name',
      '$birthday',
      '$tel',
      '$addr',
      '$identity'
    )";
      //echo $sql;
      $pdo->query($sql);

      redirect("index.php?reg=ok");
   
  break;
  case "login":
    //登入檢查功能
  
    
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];

    $sql="select * from user where acc='$acc'";
    $row=$pdo->query($sql)->fetch();
    if(!empty($row)){
      if($row['acc']==$acc && $row['pw']==$pw){
        echo "登入成功";
      }else{
        echo "帳號密碼錯誤";
      }
    }else{
        echo "帳號不存在";
    }
    //echo  "登入檢查";
  break;
  case "forget":
    //忘記密碼
    echo  "忘記密碼";
  break;
  default :
    //echo  "沒有這個功能";
    header("location:index.php");
    //header("location:http://www.pchome.com.tw");
}
?>

