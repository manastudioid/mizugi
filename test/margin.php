<h3>Margin</h3>
<hr>
<h5>Margin</h5>
<hr>
<?php
foreach(STEP_LIST as $step_no => $value) 
{
?>
<div class="p-2">
    <span class="border-3">.border-3</span>
    <span class="border-3 m-<?=$step_no?>">.border-3 .m-<?=$step_no?></span>
    <span class="border-3">.border-3</span>
</div>
<?php
}
?>
<h5>Margin Direction</h5>
<hr>
<?php
foreach(DIRECTION_LIST as $direction_name => $value)  
{
?>
<div class="p-2">
    <span class="border-3">.border-3</span>
    <span class="border-3 m<?=$direction_name?>-3">.border-3 .m<?=$direction_name?>-3</span>
    <span class="border-3">.border-3</span>
</div>
<?php    
}
?>