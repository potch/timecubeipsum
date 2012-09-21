<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Time Cube Ipsum</title>
    <style>
        body {
            background: url(grid.gif);
            font-family: 'Times New Roman';
            font-size: 48px;
            text-align: center;
        }
        p {
            max-width: 600px;
            margin: auto;
        }
    </style>
  </head>
  <body>
    <h1>TIME CUBE IPSUM</h1>
    <?php
        $num = $_SERVER['QUERY_STRING'];
        $screeds = file('tcipsum.txt');
        $nscreeds = count($screeds);
        for ($i = 0; $i < $num; $i++) {
            echo '<p>' . $screeds[rand(0,$nscreeds)] . '</p>';
        }
    ?>
  </body>
</html>