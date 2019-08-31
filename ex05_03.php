<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex05_04.php</title>
</head>
<body>
  <?php
  $name = $_POST["name"];
  $weight = $_POST["weight"];
  $height = $_POST["height"];
  $err_flg = 0;

  if($name === "") {
    echo "氏名が入力されていません", "<br/>";
    $err_flg += 1;
  } 

  if($weight === "") {
    echo "体重が入力されていません", "<br/>";
    $err_flg += 1;
  } elseif ($weight == 0) {
    echo "体重に0を入力することはできません", "<br/>";
    $err_flg += 1;
  }

  if($height === "") {
    echo "身長が入力されていません", "<br/>";
    $err_flg += 1;
  } elseif ($height == 0) {
    echo "身長に0を入力することはできません", "<br/>";
    $err_flg += 1;
  }
  ?>


  <form action="ex05_03.php" method="POST">
    氏名:<input type="text" name="name" value=<?= $name ?>><br/>
    体重:<input type="text" name="weight" value=<?= $weight ?>><br/>
    身長:<input type="text" name="height" value=<?= $height ?>><br/>
    <br/>
    <input type="submit" name="btn" value="送信">
  </form>

  <?php 
    if($err_flg === 0) {
      $bmi_height = $height / 100.0;
      $bmi = $weight / $bmi_height / $bmi_height;
      $bmi_result = "";
  
    switch ($bmi) {
      case $bmi < 18.5:
        $bmi_result = "やせ";
        break;
      case $bmi >= 18.5 && $bmi < 25:
        $bmi_result = "標準";
        break;
      case $bmi >= 25 && $bmi < 30:
        $bmi_result = "肥満";
        break;
      case $bmi >= 30:
        $bmi_result = "高度肥満";
        break;
      default:
        $bmi_result = "測定不能";
        break;
    }

      echo $_POST["name"], "さんのBMIは、", $bmi, "で、", "「", $bmi_result, "」です";
    }
  ?>
</body>