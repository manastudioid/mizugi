<?php
foreach(STEP_LIST as $step_no => $value)
{
?>
.m-<?=$step_no?> {
    margin: <?=$value['rem']?>rem;    
}
<?php
}

foreach(DIRECTION_LIST as $direction_name => $direction_name_full)
{
    foreach(STEP_LIST as $step_no => $val)
    {
    ?>
    .m<?=$direction_name?>-<?=$step_no?> {
        margin-<?=$direction_name_full?>: <?=$val['rem']?>rem;    
    }
    <?php    
    }

}