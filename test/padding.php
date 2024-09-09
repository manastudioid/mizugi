<h3>Padding</h3>
<hr>
<h5>Padding</h5>
<hr>
<?php
foreach(STEP_LIST as $step_no => $value) 
{
?>
<div class="p-2">
    <span class="border-3 p-<?=$step_no?>">.border-3 .p-<?=$step_no?></span>
</div>
<?php
}
?>
<h5>Padding Direction</h5>
<hr>
<?php
foreach(DIRECTION_LIST as $direction_name => $value)  
{
?>
<div class="p-2">
    <span class="border-3 p<?=$direction_name?>-3">.border-3 .p<?=$direction_name?>-3</span>
</div>
<?php    
}
?>