<h3>Border</h3>
<hr>
<h5>Border</h5>
<hr>
<?php
foreach(STEP_LIST as $step_no => $value) 
{
?>
<div class="p-2">
    <div class="border-<?=$step_no?>">border-<?=$step_no?></div>
</div>
<?php
}
?>
<h5>Border Additive</h5>
<hr>
<?php
foreach(DIRECTION_LIST as $direction_name => $value) 
{
?>
<div class="p-2">
    <div class="border-<?=$direction_name?>-3">border-<?=$direction_name?>-3</div>
</div>
<?php
}
?>
<h5>Border Subtractive</h5>
<hr>
<?php
foreach(DIRECTION_LIST as $direction_name => $value) 
{
?>
<div class="p-2">
    <div class="border-3 border-<?=$direction_name?>-0">border-3 border-<?=$direction_name?>-0</div>
</div>
<?php
}
?>
<h5>Border Color</h5>
<hr>
<?php
foreach(COLORS_LIST as $color_name => $value)
{
?>
<div class="p-2">
    <div class="border-3 border-<?=$color_name?>">border-3 border-<?=$color_name?></div>
</div>
<?php
}
?>