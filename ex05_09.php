<?php //php1ここから
  $station_tbl = array("中百舌鳥", "深井", "泉ヶ丘", "栂・美木多", "光明池", "和泉中央");
  $station_judge = array_fill(0, 6, 0);
//php1ここまで ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex05_09.php</title>
</head>
<body>
  <form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST">
    <select name="station[]" size="6" multiple="multiple">
    <?php//php2ここから
      
    //php2ここまで?>

    </select>
  </form>
<?php //php2ここから



  //php2ここまで?>
</body>