<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//error_reporting(E_ERROR);
//
//class Health {
//
//    public static $status;
//
//    public function __construct() {
//        
//    }
//
//    public function check($ip, $port) {
//        $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//        socket_set_nonblock($sock);
//        socket_connect($sock, $ip, $port);
//        socket_set_block($sock);
//        $status1 = socket_select($r = array($sock), $w = array($sock), $f = array($sock), 5);
//        return ($status1);
//    }
//
//    public function status($state) {
//        switch ($state) {
//            case 2:
//                echo "Closed\n";
//                break;
//            case 1:
//                echo "Openning\n";
//                break;
//            case 0:
//                echo "Timeout\n";
//                break;
//        }
//    }
//
//}
//
//$ip = '192.168.1.116';
//$port = 26;
//$health = new Health();
//$state = $health->check($ip, $port);
//$health->status($state);
//
//



echo "<pre>";
$area = array(
    array('id' => 1, 'area' => '北京', 'pid' => 0),
    array('id' => 2, 'area' => '广西', 'pid' => 0),
    array('id' => 3, 'area' => '广东', 'pid' => 0),
    array('id' => 4, 'area' => '福建', 'pid' => 0),
    array('id' => 11, 'area' => '朝阳区', 'pid' => 1),
    array('id' => 12, 'area' => '海淀区', 'pid' => 1),
    array('id' => 21, 'area' => '南宁市', 'pid' => 2),
    array('id' => 45, 'area' => '福州市', 'pid' => 4),
    array('id' => 113, 'area' => '亚运村', 'pid' => 11),
    array('id' => 115, 'area' => '奥运村', 'pid' => 11),
    array('id' => 234, 'area' => '武鸣县', 'pid' => 21)
);

function familytree($arr, $id) {
    static $list = array();
    foreach ($arr as $v) {
        if ($v['pid'] == $id) {
            familytree($arr, $v['pid']);
            $list[] = $v;
        }
    }
    return $list;
}

print_r(familytree($area, 2));
