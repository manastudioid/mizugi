<h3>Background Color</h3>
<hr>
<h5>Background Color</h5>
<hr>
<?php
foreach(COLORS_LIST as $color_name => $value) 
{
?>
<div class="p-2">
    <span class="bg-<?=$color_name?><?=$color_name == 'dark' || $color_name == 'black' ? ' color-white' : ($color_name == 'white' || $color_name == 'light' ? ' color-black' : '')?>">.bg-<?=$color_name?></span>
</div>
<?php
}
?>
