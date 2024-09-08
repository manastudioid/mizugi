<?php
include 'config.php';
include 'variables.php';

$files = array_diff(scandir('modules'), array('.', '..'));
$content = array();

foreach($files as $index => $value)
{
    $exp_filename = explode('.', $value);
    $filename = $exp_filename[0];
    $filename_ext = end($exp_filename);
    
    if($filename_ext == 'css')
    {
        $content[$filename] = file_get_contents('modules/'.$value);
    }    
    elseif($filename_ext == 'php')
    {
        ob_start();
        include 'modules/'.$value;
        $output = ob_get_contents();
        ob_end_clean();
        $content[$filename] = $output;
    }
}

ksort($content);

if(file_put_contents('output/'.OUTPUT_FILENAME.'.css', implode("\n", $content)))
{
  echo 'Generated<hr>'.date('r');
}
else
{
  echo 'Error<hr>'.date('r');
}