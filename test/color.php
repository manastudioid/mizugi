<h3>Color</h3>
<hr>
<h5>Color</h5>
<hr>
<?php
foreach(COLORS_LIST as $color_name => $value) 
{
?>
<div class="p-2">
    <span class="color-<?=$color_name?><?=$color_name == 'light' || $color_name == 'white' ? ' bg-black' : ''?>">.color-<?=$color_name?></span>
</div>
<?php
}
?>
