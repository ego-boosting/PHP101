<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>

  <?php


    $num = 100;

    $remainder = $num % 3;

    switch ($remainder) {
      case 0:
        echo '大吉です。';
        break;
      case 1:
        echo '中吉です。';
        break;
      case 2:
        echo '小吉です。';
        break;
      default:
        echo '凶です。';
    }

  ?>
  
  
  <?php


    $num = 100;

    $remainder = $num % 3;

    switch ($remainder) {
      case 0:
        echo '大吉です。';
        break;
      case 1:
        echo '中吉です。';
        break;
      case 2:
        echo '小吉です。';
        break;
      default:
        echo '凶です。';
    }

  ?>

  <?php

    $num = 100;
    $remainder = $num % 3;
    switch ($remainder) {
      case 0;
        echo '大吉です。';
        break;
      case 1;
        echo '中吉です。';
        break;
        case 1:
        echo '中吉です。';
        break;
      case 2:
        echo '小吉です。';
        break;
      default:
        echo '凶です。';

    }
  ?>
    <?php

    $num = 100;
    $remainder = $num % 3;
    switch ($remainder) {
      case 0;
        echo '大吉です。';
        break;
      case 1;
        echo '中吉です。';
        break;
        case 1:
        echo '中吉です。';
        break;
      case 2:
        echo '小吉です。';
        break;
      default:
        echo '凶です。';

    }
  ?>
  
  <?php
    for ($i = 1; $i <= 1000; $i++) {
      if ($i < 500) {
        break;
      }
      echo $i;
      echo '<br>';
    }
  ?>
  
  <?php
    for ($i = 1; $i <= 100; $i++) {
      if ($i < 100) {
        break;
      }
      echo $i;
      echo '<br>';
    }
  ?>


</body>
</html>