<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex05_05.php</title>
</head>
<body>
  <?php
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $enzan = $_POST["enzansi"];
    $sum = 0;
    $errflg = 0;

    if(is_numeric($num1) == FALSE || is_numeric($num2) == FALSE){
      $errflg += 1;
    } else {
      switch ($enzan) {
        case '+':
          $sum = $num1 + $num2;
          break;
        case '-':
          $sum = $num1 - $num2;
          break;
        case '*':
          $sum = $num1 * $num2;
          break;
        case '/':
          $sum = $num1 / $num2;
          break;
        case '%':
          $sum = $num1 % $num2;
          break;
        default:
          $errflg += 1;
          break;
      }
    }
  ?>

<form action="ex04_04.php" method="POST">
  <input type="text" name="number1" value="<?php echo $num1 ?>">
  <input type="text" name="enzansi" value="<?php echo $enzan ?>">
  <input type="text" name="number2" value="<?php echo $num2 ?>">
    <?php if($errflg === 0) {
      echo "=", $sum;
    } ?><br/>
  <input type="submit" name="btn" value="送信">
</form>

  <?php
    if($errflg !== 0) {
      echo "正しく入力してください";
    } 
  ?>
  ?>
</body>