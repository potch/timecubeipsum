<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Time Cube Ipsum</title>
    <style>
        body {
            background: url(grid.gif);
        }
    </style>
  </head>
  <body>
    <h1>TIME CUBE IPSUM</h1>
    <?php
        $num = $_SERVER['QUERY_STRING'];
        $screeds = file_get_contents('tcipsum.txt').split('\n');
        $nscreeds = count($screeds);
        for ($i = 0; $i < $num; $i++) {
            echo '<p>' . $screeds[rand(0,$nscreeds)] . '</p>';
        }
    ?>
  </body>
</html>