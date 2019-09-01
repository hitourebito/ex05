<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex05_07.php</title>
</head>
<body>
  <?php //php1ここから
  $errflg = 0;

  if ($_POST["count"] === "1") {
    $name = $_POST["name"];
    $transportation = $_POST["transportation"];

    if ($name === "") {
      echo "氏名を入力してください", "<br/>";
      $errflg += 1;
    }

    if (isset($transportation) == FALSE) {
      echo "交通手段を選択してください", "<br/>";
      $errflg += 1;
    }

    if ($errflg !== 0) {
      echo "<br/>";
    }
  }
   //php1ここまで ?>

  <form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST">
    <div>科目:</div>
    <select name="subject">
      <option value="情報通信科">情報通信科</option>
      <option value="ネットワークセキュリティ科">ネットワークセキュリティ科</option>
      <option value="Webシステム開発科">Webシステム開発科</option>
      <option value="環境分析科">環境分析科</option>
    </select>
    <br/>
    <br/>
    <div>氏名:</div>
    <input type="text" name="name" value=<?= $_POST["name"]?>>
    <br/>
    <br/>
    <div>交通手段:</div>
    <select name="transportation[]" multiple="multiple">
      <option value="徒歩">徒歩</option>
      <option value="自転車">自転車</option>
      <option value="南海バス">南海バス</option>
      <option value="泉北高速鉄道">泉北高速鉄道</option>
      <option value="地下鉄">地下鉄</option>
      <option value="南海・JR">南海・JR</option>
      <option value="近鉄">近鉄</option>
      <option value="車・バイク">車・バイク</option>
      <option value="その他手段">その他手段</option>
    </select>
    <br/>
    <br/>
    <input type="hidden" name="count" value="1">
    <input type="submit" name="btn" value="送信">
  </form>

  <?php //php2ここから
    if($_POST["count"] === "1") {
      if ($errflg === 0) {
        echo "科目:", $_POST["subject"], "<br/>";
        echo "氏名:", $name, "<br/>";
        echo "交通手段:";

        foreach ($transportation as $key => $value) {
          switch ($value) {
            case '徒歩':
              echo "徒歩 ";
              break;
            case '自転車':
              echo "自転車 ";
              break;
            case '南海バス':
              echo "南海バス ";
              break;
            case '泉北高速鉄道':
              echo "泉北高速鉄道 ";
              break;
            case '地下鉄':
              echo "地下鉄 ";
              break;
            case '南海・JR':
              echo "南海・JR ";
              break;
            case '近鉄':
              echo "近鉄 ";
              break;
            case '車・バイク':
              echo "車・バイク ";
              break;
            case 'その他手段':
              echo "その他手段 ";
              break;
            default:
              break;
          }
        }
      }
    }
  // php2ここまで ?>
</body>