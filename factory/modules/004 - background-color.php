<?php
foreach(COLORS_LIST as $color_name => $value)
{
?>
.bg-<?=$color_name?> {
    background-color: <?=$value?>;    
}
<?php
}