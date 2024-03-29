<?php //php1ここから
  $station_tbl = array("中百舌鳥", "深井", "泉ヶ丘", "栂・美木多", "光明池", "和泉中央");
  $errmsg = array();
  $station = array();
  $station_judge = array_fill(0, 6, 0);
  $pflg = 0;
  $errflg = 0;
  $fee_tbl = array(0 => array(1 => 180, 2 => 220, 3 => 260, 4 => 280, 5 => 320),
                    1 => array(2 => 200, 3 => 220, 4 => 240, 5 => 280),
                    2 => array(3 => 180, 4 => 200, 5 => 240),
                    3 => array(4 => 160, 5 => 220),
                    4 => array(5 => 200)
                  );

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pflg = 1;

    if (isset($_POST["station"]) == FALSE || count($_POST["station"]) === 1) {
      $errflg += 1;
      $errmsg[] = "駅を2つ以上選択してください";
    }

    if (isset($_POST["station"]) && count($_POST["station"])) {
      foreach ($_POST["station"] as $value) {
        $station_judge[$value] = 1;
        $station = $_POST["station"];
      }
    }

  }
//php1ここまで ?>

<?php 
  if (!$pflg || count($errmsg)) { 
    foreach ($errmsg as $value) {
      echo "${value}", "<br/><br/>";
    }
?>
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
    <div>運賃を知りたい駅間を選んでください</div>
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
<?php //php3ここから
    } else { 
      for ($i=0; $i < count($station) - 1; $i++) { 
        echo $station_tbl[$station[$i]], "→", $station_tbl[$station[$i + 1]], "までは";
        echo $fee_tbl[$station[$i]][$station[$i + 1]], "円です", "<br/>";
      }
    }
// php3ここまで ?>
</body>