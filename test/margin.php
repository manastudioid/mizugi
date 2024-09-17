<section id="margin">
  <h1>Margin</h1>
  <hr>
<h5>Margin</h5>
<?php
$code = '';
foreach(STEP_LIST as $step_no => $value) 
{
    $code = '
    <div class="p-2">
        <span class="border-3">.border-3</span>
        <span class="border-3 m-'.$step_no.'">.border-3 .m-'.$step_no.'</span>
        <span class="border-3">.border-3</span>
    </div>
    ';   
    echo codeBlock($code); 
    echo codePreview($code);
}

?>
<h5>Margin Direction</h5>
<?php
$code = '';
foreach(DIRECTION_LIST as $direction_name => $value) 
{
    $code = '
    <div class="p-2">
        <span class="border-3">.border-3</span>
        <span class="border-3 m'.$direction_name.'-3">.border-3 .m'.$direction_name.'-3</span>
        <span class="border-3">.border-3</span>
    </div>
    ';   
    echo codeBlock($code); 
    echo codePreview($code);
}

?>
</section>
