<section id="alert">
  <h1>Alert</h1>
  <hr>
<h5>Alert</h5>
<?php
$code = '';
foreach(COLORS_LIST as $color_name => $value)  
{
    $code .= '
    <div class="p-4 bg-'.$color_name.($color_name == 'dark' || $color_name == 'black' ? ' color-white' : ($color_name == 'white' || $color_name == 'light' ? ' color-black' : '')).'">Alert</div>
    ';   
}
echo codeBlock($code); 
echo codePreview($code);
?>
</section>
