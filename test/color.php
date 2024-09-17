<section id="color">
  <h1>Color</h1>
  <hr>
<h5>Color</h5>
<?php
$code = '';
foreach(COLORS_LIST as $color_name => $value)  
{
    $code .= '
    <span class="color-'.$color_name.($color_name == 'light' || $color_name == 'white' ? ' bg-black' : '').'">.color-'.$color_name.'</span>
    ';   
}
echo codeBlock($code); 
echo codePreview($code);
?>
</section>
