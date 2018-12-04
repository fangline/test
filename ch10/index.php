<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>第十章-註冊與登入</title>
  <style>
  td{
    padding:5px 0;
  }
  </style>
</head>
<body>
<form action="api.php?do=login" method="post">
  <table style="width:300px;margin:100px auto;border:2px solid black;">
    <tr>
      <td colspan="2">
        <?php
          if(!empty($_GET['reg']) && $_GET['reg']=='ok'){
            echo "註冊完成";
          }
          if(!empty($_GET['login'])){

          }
        ?>
      
      </td>
    </tr>
    <tr>
      <td width="100px" style="text-align:right">帳號</td>
      <td><input type="text" name="acc"></td>
    </tr>
    <tr>
      <td style="text-align:right">密碼</td>
      <td><input type="password" name="pw"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center">
        <input type="submit" value="確認">
        <input type="reset" value="清空">
        <input type="hidden" name="dodo" value="login">
      </td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center">
      <a href="forget.php">忘記密碼</a> | 
      <a href="reg.php">註冊新帳號</a>
      </td>
    </tr>
  </table>
</form>
</body>
</html>