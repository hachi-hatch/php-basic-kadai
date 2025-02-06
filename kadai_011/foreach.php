<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
  </head>

  <body>
    <?php
    $datas = ['名前' => '玉ねぎ', '値' => '200', '産地' => '北海道'];

    foreach ($datas as $kye => $value) {
      echo "{$kye}:{$value}<br>";
    }
    ?>
  </body>
</html>