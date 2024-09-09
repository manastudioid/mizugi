<?php
foreach(COLORS_LIST as $color_name => $value)
{
?>
.border-<?=$color_name?> {
    border-color: <?=$value?> !important;    
}
<?php
}

foreach(STEP_LIST as $step_no => $value)
{
?>
.border-<?=$step_no?> {
    border: <?=$value['px']?>px solid currentcolor;    
}
<?php
}


foreach(DIRECTION_LIST as $direction_name => $direction_name_full)
{
    foreach(STEP_LIST as $step_no => $val)
    {
    ?>
    .border-<?=$direction_name?>-<?=$step_no?> {
        border-<?=$direction_name_full?>: <?=$val['px']?>px solid currentcolor;    
    }
    <?php    
    }

}