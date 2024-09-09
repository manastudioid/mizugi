<?php
foreach(STEP_LIST as $step_no => $value)
{
?>
.p-<?=$step_no?> {
    padding: <?=$value['rem']?>rem;    
}
<?php
}

foreach(DIRECTION_LIST as $direction_name => $direction_name_full)
{
    foreach(STEP_LIST as $step_no => $val)
    {
    ?>
    .p<?=$direction_name?>-<?=$step_no?> {
        padding-<?=$direction_name_full?>: <?=$val['rem']?>rem;    
    }
    <?php    
    }

}