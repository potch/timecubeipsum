<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Time Cube Ipsum</title>
    <style>
        body {
            background: url(grid.gif);
        }
        body, input, button {
            font-family: 'Times New Roman';
            font-size: 48px;
            text-align: center;
        }
        input {
            width: 48px;
        }
        p {
            max-width: 600px;
            margin: auto;
            margin-bottom: 1em;
        }
        div {
            color: #080;
            margin-bottom: 1em;
        }
    </style>
  </head>
  <body>
    <?php
        $num = $_SERVER['QUERY_STRING'];
        if (!$num) {
            $num = 5;
        }
        $screeds = file('tcipsum.txt');
        $nscreeds = count($screeds);
    ?>
    <h1>TIME CUBE IPSUM</h1>
    <div>You cannot comprehend the actual <input id='num' value='<?php echo $num ?>'> paragraphs in single rotation of Earth <button id="go">GO</button></div>
    <?php
        for ($i = 0; $i < $num; $i++) {
            echo '<p>' . $screeds[rand(0,$nscreeds)] . '</p>';
        }
    ?>
    <script>
        var button = document.getElementById('go');
        var input = document.getElementById('num');
        button.onclick = function() {
            go();
        };
        input.onkeydown = function(e) {
            if (e.charCode == '13')  {
                go();
            }
        }
        function go() {
            var num = input.getAttribute('val');
            window.location = '/?' + num;
        }
    </script>
    <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '505ce098613f5d0c15000076');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>
  </body>
</html>