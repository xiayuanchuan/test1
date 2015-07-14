<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
phpinfo();
//

//$redis = new Redis();
//$redis->connect("localhost","6379");
//$redis->set("test","Hello World");
//echo $redis->get("test");

die;
function sent_post($url,$post_data){
    
    $postData=  http_build_query($post_data);
    $options=array(
        'http'=>array(
            'method'=>'POST',
            'header'=>'Content-Type:application/x-www-form-urlencoded',
            'content'=>$postData,
            'timeout'=>15*60,
        ),
    );
    $context=  stream_context_create($options);
    $result=  file_get_contents($url);
    return $result;
}
//调用该方法
$post_data=array();

print_r(sent_post("http://192.168.1.112", $post_data));


