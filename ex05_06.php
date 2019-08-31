<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex05_06.php</title>
</head>
<body>
  <?php
    
  ?>
  <form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST">
    <div>求める値: 
      <input type="checkbox" name="require_value[]" value="直径">直径
      <input type="checkbox" name="require_value[]" value="円周">円周
      <input type="checkbox" name="require_value[]" value="円の面積">円の面積
      <input type="checkbox" name="require_value[]" value="球の体積">球の体積
      <input type="checkbox" name="require_value[]" value="球の表面積">球の表面積
      <input type="checkbox" name="require_value[]" value="直径">直径
      <input type="hidden" name="count" value="1">
    </div>
    <div>
      半径:<input type="text" name="hankei" value=<?= $_POST["hankei"]?>>
    </div>
    <input type="submit" name="btn" value="送信">
  </form>
  <?php

  ?>
</body>