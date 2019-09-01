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
  <?php //phpここから

   //phpここまで
   ?>

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
    <select name="transportation[]" size="4" multiple="multiple">
      <option value="徒歩">徒歩</option>
      <option value="自転車">自転車</option>
      <option value="南海バス">南海バス</option>
      <option value="泉北高速鉄道">泉北高速鉄道</option>
      <option value="地下鉄">地下鉄</option>
      <option value="">南海・JR</option>
      <option value="南海・JR">近鉄</option>
      <option value="車・バイク">車・バイク</option>
      <option value="その他手段">その他手段</option>
    </select>
    <br/>
    <br/>
    <input type="hidden" name="count" value="1">
    <input type="submit" name="btn" value="送信">
  </form>
</body>