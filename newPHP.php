<?php

echo rand(12, 20);
echo rand();
echo "<hr>";
echo date("y-m-d");

$arra  = range(10, 30, 2);
    print_r($arra);
    $arraStr=  implode("--", $arra);
    echo $arraStr;
    echo strrev($arraStr);
    
    
    $str="aaa aaaasds asda9s9s ssdsdssssssaasas";
        echo '<br>'.$str.'<br>';
    $a=$str;
    $str=  preg_replace("/\s*/is", '', $str);
    echo $str.'<br>';
    $str=preg_replace('/\S/i', 'd', $a);
    echo $str.'<br>';
    $a="http://www.aixianxing.com/upload/image/i.png";
    $str=preg_replace('/^(.*)(\/upload.*)$/i', '<b>$2</b>', $a);
    echo $str.'<br>';
?>