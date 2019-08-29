<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex05_02.html</title>
</head>
<body>
<?php
  while(true)
    {
      if (stripos($_SERVER["HTTP_USER_AGENT"], "Firefox") !== FALSE)
      {
        echo "あなたのブラウザは、ずばり Ｆｉｒｅｆｏｘ です！";
        break;
      }

      if (stripos($_SERVER["HTTP_USER_AGENT"], "Edge") !== FALSE)
      {
        echo "あなたのブラウザは、ずばり Eｄｇｅ です！";
        break;
      }
      if (stripos($_SERVER["HTTP_USER_AGENT"], "Trident/7.0") !== FALSE)
      {
        echo "あなたのブラウザは、ずばり ＩＥ（Ver11） です！";
        break;
      }
      if (stripos($_SERVER["HTTP_USER_AGENT"], "MSIE") !== FALSE)
      {
        echo "あなたのブラウザは、ずばり ＩＥ（Ver11以前） です！";
        break;
      }

      if (stripos($_SERVER["HTTP_USER_AGENT"], "Sleipnir") !== FALSE)
      {
        echo "あなたのブラウザは、ずばり Ｓｌｅｉｐｎｉｒ です！";
        break;
      }

      if (stripos($_SERVER["HTTP_USER_AGENT"], "OPR") !== FALSE)
      {
        echo "あなたのブラウザは、ずばり Ｏｐｅｒａ です！";
        break;
      }

      if (stripos($_SERVER["HTTP_USER_AGENT"], "Vivaldi") !== FALSE)
      {
        echo "あなたのブラウザは、ずばり Vｉｖａｌｄｉ です！";
        break;
      }

      if( (stripos($_SERVER["HTTP_USER_AGENT"], "Chrome") !== FALSE) && 
          (stripos($_SERVER["HTTP_USER_AGENT"], "Safari") !== FALSE) )
      {
        echo "あなたのブラウザは、ずばり Ｃｈｒｏｍｅ です！";
        break;
      }

      if (stripos($_SERVER["HTTP_USER_AGENT"], "Safari") !== FALSE)
      {
        echo "あなたのブラウザは、ずばり Ｓａｆａｒｉ です！";
        break;
      }

      echo "あなたのブラウザは、不明です！";
      break;
    }
?>
</body>