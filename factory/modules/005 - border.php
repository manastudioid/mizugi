<?php
foreach(COLORS_LIST as $color_name => $value)
{
?>
.border-<?=$color_name?> {
    border-color: <?=$value?>;    
}
<?php
}

foreach(STEP_LIST as $step_no => $value)
{
?>
.border-<?=$step_no?> {
    border: <?=$value['px']?> px;    
}
<?php
}


foreach(DIRECTION_LIST as $direction_name => $value)
{
    foreach(STEP_LIST as $step_no => $val)
    {
    ?>
    .border-<?=$direction_name?>-<?=$step_no?> {
        border-<?=$direction_name?>: <?=$val['px']?> px;    
    }
    <?php    
    }

}