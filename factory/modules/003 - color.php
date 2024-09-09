<?php
foreach(COLORS_LIST as $color_name => $value)
{
?>
.color-<?=$color_name?> {
    color: <?=$value?>;    
}
<?php
}