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
    $acc=$_POST['acc'];
    if($acc==""){
      $msg=1;
      redirect("reg.php?msg=$msg");
      exit(); //停止執行後面的程式
    }

    if(strlen($acc)<4 or strlen($acc)>12){
      $msg=2;
      redirect("reg.php?msg=$msg");
      exit(); //停止執行後面的程式
    }
    
    if(!($acc==ucfirst($acc))){
      $msg=3;
      redirect("reg.php?msg=$msg");
      exit(); //停止執行後面的程式
    }

    for($i=0;$i<strlen($acc);$i++){
      $test=ord(mb_substr($acc,$i,1,'utf8'));
      if(!(($test>=48 && $test <= 57) or ($test>=65 && $test <= 90) or ($test >= 97 && $test <= 122))){
        $msg=4;
        redirect("reg.php?msg=$msg");
        exit(); //停止執行後面的程式
      }
  }

  $sql="select * from user where acc='$acc'";
  //echo $sql;
  $row=$pdo->query($sql)->fetch();
  echo $row['acc'];
  if($acc==$row['acc']){
    $msg=5;
    redirect("reg.php?msg=$msg");
    exit(); //停止執行後面的程式
  }

    $pw=$_POST['pw'];

    if($pw==""){
      $msgpw=1;
      redirect("reg.php?pw=$msgpw");
      exit(); //停止執行後面的程式
    }

    if(strlen($pw)<4 or strlen($pw)>12){
      $msgpw=2;
      redirect("reg.php?pw=$msgpw");
      exit(); //停止執行後面的程式
    }  
    for($i=0;$i<strlen($pw);$i++){
      $test=ord(mb_substr($pw,$i,1,'utf8'));
      if(!(($test>=48 && $test <= 57) or ($test>=65 && $test <= 90) or ($test >= 97 && $test <= 122))){
        $msgpw=4;
        redirect("reg.php?pw=$msgpw");
        exit(); //停止執行後面的程式
      }
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

     // redirect("index.php");
   
  break;
  case "login":
    //登入檢查功能
    $acc=$_post['acc'];
    $pw=$_post['pw'];

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

