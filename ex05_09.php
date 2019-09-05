<?php //php1ここから
  $station_tbl = array("中百舌鳥", "深井", "泉ヶ丘", "栂・美木多", "光明池", "和泉中央");
  $errmsg = array();
  $station_judge = array_fill(0, 6, 0);
  $pflg = 0;
  $errflg = 0;


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pflg = 1;

    if (isset($_POST["station"]) == FALSE || count($_POST["station"]) === 1) {
      $errflg += 1;
      $errmsg[] = "駅を2つ以上選択してください";
    }

    if (isset($_POST["station"]) && count($_POST["station"])) {
      foreach ($_POST["station"] as $value) {
        $station_judge[$value] = 1;
      }
    }

  }
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
    <?php //php2ここから
      foreach ($station_tbl as $key => $value) {
        echo "<option value=", "$key";
        if ($station_judge[$key]) {
          echo " selected";
        }
        echo ">$value</option>";
      }
      echo "<br/>";
    //php2ここまで ?>
    </select>
    <br/>
    <input type="submit" name="btn" value="送信">
  </form>
<?php //php2ここから



  //php2ここまで?>
</body>