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

<form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST">
  <input type="text" name="number1" value="<?php echo $num1 ?>">
  <input type="text" name="number2" value="<?php echo $num2 ?>"><br/>
  <input type="hidden" name="count" value="1">
  <input type="submit" name="btn" value="+">
  <input type="submit" name="btn" value="-">
  <input type="submit" name="btn" value="*">
  <input type="submit" name="btn" value="*">
  <input type="submit" name="btn" value="%">
    <?php if($errflg === 0) {
      echo "=", $sum;
    } ?><br/>
</form>

  <?php
    if($errflg !== 0 && $_POST["count"] === "1") {
      echo "正しく入力してください";
    } 
  ?>
</body>