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
  <?php //phpここから
    //エラーを数える変数を定義
    $errflg = 0;
    //フラグを数える変数を定義
    $flg = 2;

    //半径が入力されているか確認
    if ($_POST["hankei"] === "" && $_POST["count"] === "1") {
      echo "半径が入力されていません", "<br/>";
      $errflg += 1;
    } 
      //半径に数字が入力されているか確認
      elseif (is_numeric($_POST["hankei"]) == FALSE && $_POST["count"] === "1") {
        echo "半径には数字を入力してください", "<br/>";
        $errflg += 1;
    } 
      //半径に入力された数字が0より大きいか確認
      elseif ($_POST["hankei"] <= 0 && $_POST["count"] === "1") {
        echo "半径には0以上の数値を入力してください", "<br/>";
        $errflg += 1;
    } //エラーがなければフラグを減らす
      elseif ($_POST["count"] === "1"){
        $flg -= 1;
    }
    
    //チェックボックスが選択されているか確認
    if (isset($_POST["require_value"]) == FALSE && $_POST["count"] === "1") {
      echo "求める値が選ばれていません";
      $errflg += 1;
    } //エラーがなければフラグを減らす
      elseif ($_POST["count"] === "1") {
        $flg -= 1;
    }

    //半径が入力されていて、チェックボックスも選択されている時の処理
    if ($flg === 0) {
      echo "半径:", $_POST["hankei"], "<br/>";
      foreach ($_POST["require_value"] as $key => $value) {
        switch ($value) {
          case '直径':
            echo "直径:", $_POST["hankei"] * 2, "<br/>";
            break;
          case '円周':
            echo "円周:", $_POST["hankei"] * 2 * M_PI, "<br/>";
            break;
          case '円の面積':
            echo "円の面積:", $_POST["hankei"] * $_POST["hankei"] * M_PI, "<br/>";
            break;
          case '球の体積':
            echo "球の体積:", $_POST["hankei"] * $_POST["hankei"] * $_POST["hankei"] * 4 / 3 * M_PI, "<br/>";
            break;
          case '球の表面積':
            echo "球の表面積:", $_POST["hankei"] * $_POST["hankei"] * 4 * M_PI, "<br/>";
            break;
          default:
            break;
        }
      }
      echo "<br/>";
    }

    //エラー時改行処理
    if ($errflg !== 0) {
      echo "<br/>", "<br/>";
    }
    //phpここまで
  ?>

  <form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST">
    <div>求める値: 
      <input type="checkbox" name="require_value[]" value="直径">直径
      <input type="checkbox" name="require_value[]" value="円周">円周
      <input type="checkbox" name="require_value[]" value="円の面積">円の面積
      <input type="checkbox" name="require_value[]" value="球の体積">球の体積
      <input type="checkbox" name="require_value[]" value="球の表面積">球の表面積
      <input type="hidden" name="count" value="1">
    </div>
    <div>
      半径:<input type="text" name="hankei" value=<?= $_POST["hankei"]?>>
    </div>
    <input type="submit" name="btn" value="送信">
  </form>
</body>