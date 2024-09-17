<section id="border">
  <h1>Border</h1>
  <hr>
<h5>Border</h5>
<?php
$code = '';
foreach(STEP_LIST as $step_no => $value) 
{
    $code .= '
    <div class="border-'.$step_no.'">border-'.$step_no.'</div>
    ';    
}
echo codeBlock($code); 
echo codePreview($code);
?>
<h5>Border Additive</h5>
<?php
$code = '';
foreach(DIRECTION_LIST as $direction_name => $value)
{
    $code .= '
    <div class="border-'.$direction_name.'-3">border-'.$direction_name.'-3</div>
    ';    
}
echo codeBlock($code); 
echo codePreview($code);
?>
<h5>Border Subtractive</h5>
<?php
$code = '';
foreach(DIRECTION_LIST as $direction_name => $value)
{
    $code .= '
    <div class="border-3 border-'.$direction_name.'-0">border-3 border-'.$direction_name.'-0</div>
    ';    
}
echo codeBlock($code); 
echo codePreview($code);
?>
<h5>Border Color</h5>
<?php
$code = '';
foreach(COLORS_LIST as $color_name => $value) 
{
    $code .= '
    <div class="border-3 border-'.$color_name.'">border-3 border-'.$color_name.'</div>
    ';    
}
echo codeBlock($code); 
echo codePreview($code);
?>
</section>