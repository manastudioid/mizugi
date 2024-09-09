<?php
include '../factory/variables.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mizugi</title>
    <link href="../factory/output/mizugi.css" rel="stylesheet" integrity="" crossorigin="anonymous">
  </head>
  <body>
    <h1>Mizugi - Test</h1>
    <hr>
    <?php
        $files = array_diff(scandir('.'), array('.', '..'));
        foreach($files as $filename)
        {
            if($filename != 'index.php')
            {
                include $filename;
            }
        }
    ?>
  </body>
</html>