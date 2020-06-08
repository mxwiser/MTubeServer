<?php


$html=<<<EOT
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/icon.ico">
  </head>
  <body>
    <h1 id="abc">MxXW</h1>
    <button type="button" class="btn btn-primary" id="mhide">HIDE</button>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        $("button").click(function() {
          $("#abc").toggle();
        });
      });
</script>
  </body>
</html>
EOT;

echo $html;