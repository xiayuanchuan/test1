<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$str = '10333DDDellos.xls';
//
//echo $str . preg_match("/^[0-7]+[A-Z]{2}.*\.xls$/", $str) . "<br>";
////if(preg_match("/.xls/", $str)){
////    echo 'success';
////}else{
////    echo "失败";
////}
//$str = 'a882322222aaa@99qaq.com';
//echo $str . preg_match("/^[0-9A-Za-z]+.@[0-9a-z]+\.[a-z]+$/", $str, $arr) . "<br>";
//var_dump($arr);
////echo "获取网页内容<br>";
////$times = time();
////$str = file_get_contents("http://www.aixianxing.com");
////var_dump($str);
////echo "执行时间为：";
////echo time() - $times;
//
//$str = "<b>ssss</b><b>aaaaa</b><c>aaaaa</c><c>aaaaa</c>";
//echo $str1 = base64_encode($str);
//var_dump(base64_decode($str1));
//$pattern = "/<b>.*?<\/b>|<c>.*?<\/c>/";
//if (preg_match_all($pattern, $str, $matches)) {
//    echo "匹配成功";
//    var_dump($matches);
//} else {
//    echo "失败";
//}
//echo '<hr>' . "preg_replace:" . "<br>";
//var_dump($str);
//echo "<br>" . "结果:" . "<br>";
//preg_replace("/[a-z]+/", "WWWWWW", $str);
//var_dump($str);
//
//echo "匹配电话号码" . '<br>';
//$str = "16006666660";
//echo $str . "<br>";
//$pattern = "/^[1][3|5|6|8|9|7][0-9]{9}$/";
//preg_match($pattern, $str, $matcharr);
//print_r($matcharr);
////hh();//会报错 因为必须在br()函数被执行后才会有hh()函数;
//br();
//
//echo "function_exists" . "<br>";
//
//function haha() {
//    echo 222;
//}
//
//echo "方法名存在" . function_exists("haha");

function br() {
    echo "<br>";
}

br();

//class MyClass {
//
//    const constant = 'constant value';
//
//    function showConstant() {
//        echo self::constant . "\n";
//    }
//
//}
//
//echo MyClass::constant . "\n";
//
//$classname = "MyClass";
//echo $classname::constant . "\n"; // 自 5.3.0 起
//
//$class = new MyClass();
//$class->showConstant();
//
//echo $class::constant . "\n"; // 自 PHP 5.3.0 起
//br();
//echo "对字符串进行语法高亮";
//br();
//$str="if(a==0){"
//        . "echo 'hahhh';}";
//echo highlight_string($str, false);
echo memory_get_usage();
$str="YuFBZfqylY50KV1N8yhAf7pr-ViQUDnKM_qW47uWCJlKF_5zLcWBJSByrG54b1sO";
echo base64_decode($str);
br();
echo memory_get_usage();

$str=  file_get_contents("http://mp.weixin.qq.com/s?__biz=MjM5MzMyNzg0MA==&mid="
        . "207454247&idx=2&sn=77664ad84e9e9f42cc70e763e75a31f6&scene=5#rd");
//$str=  htmlentities($str);

echo $str;
file_put_contents("weixin.txt", $str);
$pattern="/^data-src.*>$/";
preg_match($pattern, $str, $matches);
var_dump($matches);
?> 