<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(E_ALL);
$string="Content-type:text/event-stream\n\n";
header($string);
$dataTime=new DateTime();
$now=$dataTime->format("c");
echo 'data'.$now.'\n\r';
echo 'data'.$now.'\r\n';
echo 'data'.$now.'\r\n';
echo 'data'.$now.'\r\n';
echo 'data'.$now.'\r\n';