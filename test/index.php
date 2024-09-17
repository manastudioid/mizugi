<?php
include '../factory/config.php';
include '../factory/variables.php';

function codeBlock($string) {
  return '<code><pre class="bg-light p-3">'.htmlentities($string).'</pre></code>';
}

function codePreview($string) {
  return '<div class="border-1 p-3 bc-light-darken mb-4">'.$string.'</div>';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mizugi</title>
    <link href="<?=APP_URL?>/factory/output/mizugi.css" rel="stylesheet" integrity="" crossorigin="anonymous">
  </head>
  <body>
    <h1>Mizugi - Test</h1>
    <hr>
    <?php
        $files = array_diff(scandir('.'), array('.', '..'));
        ksort($files);
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