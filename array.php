<!DOCTYPE html>
<html lang = 'ja'>
  <head>
    <meta charset='utf-8'>
    <title>PHP</title>
  </head>
  <body>
    <?php
      $colors = array('赤','青','黄');
        echo $colors[0];
      $colors[] = '白';
        echo $colors[3];
    ?>

    <?php
      $scores = array('数学' => 70,'英語' => 90,'国語' => 80);

      $scores['国語'] += 5;

      echo $scores['国語'];

    ?>
    
    <?php
      for ($i = 51; $i => 100; $i++) {
        echo $i
        echo '<br>'
      }
    ?>
  </body>
</html>