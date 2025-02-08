<!DOCTYPE html>
<html lang="ja">
  <meta charset="UTF-8">
  <title>PHP基礎編</title>

  <body>
    <p>
      <?php
      $nums = [15, 4, 18, 23, 10 ];

      function sort_2way($array, $order) {
        if ($order === TRUE) {
          echo '昇順にソートします。<br>';
          sort($array);
        }
        if ($order === FALSE) {          
          echo '降順にソートします。<br>';
          rsort($array);
        }

        foreach($array as $num) {
          echo $num . '<br>';
        }
      }

      sort_2way($nums, TRUE);
      sort_2way($nums, FALSE);
      ?>
    </p>
  </body>
</html>