<?php
echo '<pre>'.
    $x=7;
    $y=3;
    var_dump($x/$y);
echo '</pre>';
echo round(7+7.15),"<br>";
echo(sqrt(25)),"<br>";
$string='Десять негритят пошли купаться в море';
$word=explode(" ",$string);
echo $word[3],"<br>";
$string=mb_convert_case($string,MB_CASE_TITLE,'UTF-8');
echo($string),"<br>";
$string='Десять негритят пошли купаться в море';
echo mb_strlen($string),"<br>";
var_export(mb_substr($string,16,1));
echo '<pre>'.
    $x=1;
    $y=true;
    var_dump($x==$y);
echo '</pre>';
echo '<pre>'.
    $x=false;
    $y=0;
    var_dump($x===$y);
echo '</pre>';
echo substr_compare("three","три",0),"<br>";
echo '<pre>'.
    $x=(125*13+7);
    $y=(223+28*2);
    var_dump($x>$y);
echo '</pre>';

