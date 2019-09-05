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
<?php //php1ここから
  $station_name = array("発駅を選択", "和泉中央駅", "テクノステージセンター前");
  $start_time = array("16時台", "17時台", "18時台", "19時台");
  $time = array_fill(0, 4, 0);
  $izumityuou = array(0 => array(0, 34),
                      1 => array(10, 35, 59),
                      2 => array(12, 34, 59),
                      3 => array(18, 38, 59));
  $tecnostage = array(0 => array(24, 40, 50, 58),
                      1 => array(18, 34, 59),
                      2 => array(23, 36, 58),
                      3 => array(23, 42));
  $pflg = 0;
  $errflg = 0;
  $errmsg = array();
  $array_count = 0;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pflg = 1;

    if (isset($_POST["station"]) && strlen($_POST["station"])) {
      $station = $_POST["station"];
    }
    if ($station === "0") {
      $errmsg[] = "「発駅を選択」以外を選んでください";
      $errflg += 1;
    }

    if (isset($_POST["time"]) && count($_POST["time"])) {
      foreach ($_POST["time"] as $value) {
        $time[$value] = 1;
      }
    }
  }

  //php1ここまで?>

  <?php 
    if (!$pflg || count($errmsg)) { 
      foreach ($errmsg as $value) {
        echo "${value}";
      }
  ?>
    <form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST">
      発駅:<select name="station">
        <?php 
          foreach ($station_name as $key => $value) {
            echo "<option value=", "$key";
            if ($station == $key) {
              echo " selected";
            }
            echo ">$value</option>";
          }
        ?>
      </select>
      時間帯:<select name="time[]" size="4" multiple="multiple">
        <?php 
          foreach ($start_time as $key => $value) {
            echo "<option value=", "$key";
            if ($time[$key]) {
              echo " selected";
            }
            echo ">$value</option>";
          }
        ?>
      </select>

      <?= "<br/>" ?>
      <input type="submit" name="btn" value="送信">
    </form>
<?php
    } else { 
?>
    <table border="1">
    <tr><th>時間帯</th> <?php 
      echo "<th>", $station_name[$station], "発", "</th>";
    ?>
<?php
    foreach ($time as $key => $value) {
      if ($value !== 0) {
        echo "<tr><td>", $start_time[$key], "</td><td>";
        if ($station === "1") {
          foreach ($izumityuou as $key2 => $value2) {
            echo $izumityuou[$key][$key2], " ";
          }
        } else {
          foreach ($izumityuou as $key3 => $value3) {
            echo $tecnostage[$key][$key3], " ";
          }
        }
      } else {
        $array_count += 1;
        
        if ($array_count >= 4) {
          for ($i=0; $i < 4; $i++) { 
            echo "<tr><td>", $i + 16, "</td><td>";
            if ($station === "1") {
              for ($j=0; $j < 4; $j++) { 
                echo $izumityuou[$i][$j], " ";
              }
              echo "</td></tr>";
            } else {
              for ($j=0; $j < 4; $j++) { 
                echo $tecnostage[$i][$j], " ";
              }
              echo "</td></tr>";
            }
          }
        }

      }
      echo "</td></tr>";
    }
  }
?>
  </table>
</body>