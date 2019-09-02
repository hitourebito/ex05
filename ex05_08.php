<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex05_08.php</title>
</head>
<body>
  <form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST">
    発駅:<select name="station">
      <option value="">発駅を選択</option>
      <option value="">和泉中央駅</option>
      <option value="">テクノステージセンター前</option>
    </select>
    時間帯:<select name="time[]" size="4" multiple="multiple">
      <option value="">16時台</option>
      <option value="">17時台</option>
      <option value="">18時台</option>
      <option value="">19時台</option>
    </select>

    <?= "<br/>" ?>
    <input type="submit" name="btn" value="送信">
  </form>
  <?php //php1ここから
  //php1ここまで?>
</body>