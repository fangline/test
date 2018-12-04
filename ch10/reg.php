<?php            include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>會員註冊</title>
  <style>
  table{
    width:400px;
    margin:20px auto;
    border:1px solid #555;
  }
  td{
    border-bottom:1px solid #eee;
    padding:5px 2px;
  }
  td:nth-child(1){
    text-align:right;
  }
  </style>
</head>
<body>
<form action="api.php?do=reg" method="post">
<?php
   $acc_err="";
   $pw_err="";
  if(!empty($_GET['acc'])){
   $em=explode('-',$_GET['acc']);
   foreach($em as $e){
    $acc_err=$acc_err . $err[$e] . ",";
   }
  }
  if(!empty($_GET['pw'])){
    $em=explode('-',$_GET['pw']);
    foreach($em as $e){
     $pw_err=$pw_err . $err[$e] . ",";
    }
   }

?>
  <table>
    <tr>
      <td>帳號</td>
      <td><input type="text" name="acc"><br>
        <span style='color:red;font-size:12px'><?=$acc_err;?></span>
      </td>
    </tr>
    <tr>
      <td>密碼</td>
      <td><input type="password" name="pw"><br>
      <span style='color:red;font-size:12px'><?=$pw_err;?></span>
      </td>
    </tr>
    <tr>
      <td>電子郵件</td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td>姓名</td>
      <td><input type="text" name="name" value="<?php  if(isset($_GET['name'])){ echo $_GET['name']; }else{ echo "";};?>"></td>
    </tr>
    <tr>
      <td>生日</td>
      <td><input type="date" name="birthday">
      </td>
    </tr>
    <tr>
      <td>電話</td>
      <td><input type="text" name="tel"></td>
    </tr>
    <tr>
      <td>地址</td>
      <td>
        <select name="city">
          <option value="新北市">新北市</option>
          <option value="台北市">台北市</option>
          <option value="台中市">台中市</option>
          <option value="台南市">台南市</option>
          <option value="花蓮市">花蓮市</option>
          <option value="宜蘭市">宜蘭市</option>
        </select>
        <input type="text" name="addr"></td>
    </tr>
    <tr>
      <td>身份別</td>
      <td>
        <select name="identity">
        <option>請選擇</option>
        <?php

          $sql="select * from identity";
          $rows=$pdo->query($sql)->fetchAll();
          foreach($rows as $row){
            echo "<option value='".$row['id']."'>".$row['name']."</option>";
          }

        ?>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center">
        <input type="submit" value="確認註冊">
        <input type="reset" value="清空">
      </td>
    </tr>
  </table>
  </form>
</body>
</html>