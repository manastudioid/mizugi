<section id="background_color">
  <h1>Background Color</h1>
  <hr>
<h5>Background Color</h5>
<?php
$code = '';
foreach(COLORS_LIST as $color_name => $value)  
{
    $code .= '
    <span class="bg-'.$color_name.($color_name == 'dark' || $color_name == 'black' ? ' color-white' : ($color_name == 'white' || $color_name == 'light' ? ' color-black' : '')).'">.bg-'.$color_name.'</span>
    ';   
}
echo codeBlock($code); 
echo codePreview($code);
?>
</section>