<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class chouJiang {

    static function countWeight() {
        $weight = 0;
        $temp = array();
        $weight = 0;
        $data = json_decode(file_get_contents("./data.txt"), true);
        foreach ($data as $key => $value) {
            $weight += intval($value['weight']);

            for ($i = 0; $i < $value['weight']; $i++) {
                $temp[] = $value;
            }
        }
        if ($weight == 0) {
            unlink("./data.txt");
            return false;
        }

        $int = mt_rand(0, $weight - 1);
        $chouId = $temp[$int]['id'];
        if ($data[$chouId]['weight'] > 0) {
            $data[$chouId]['weight'] --;
        }
        file_put_contents("./data.txt", json_encode($data));
        $temp[$int]['count'] = $weight;
        return $temp[$int];
    }

}

$data = array(
    0 => array('id' => 0, 'anme' => '一等奖', 'weight' => 10),
    1 => array('id' => 1, 'anme' => '七等奖', 'weight' => 15),
    2 => array('id' => 2, 'anme' => '六等奖', 'weight' => 25),
    3 => array('id' => 3, 'anme' => '七等奖', 'weight' => 50),
    4 => array('id' => 4, 'anme' => '五等奖', 'weight' => 150),
    5 => array('id' => 5, 'anme' => '七等奖', 'weight' => 150),
    6 => array('id' => 6, 'anme' => '四等奖', 'weight' => 150),
    7 => array('id' => 7, 'anme' => '七等奖', 'weight' => 150),
    8 => array('id' => 8, 'anme' => '三等奖', 'weight' => 150),
    9 => array('id' => 9, 'anme' => '七等奖', 'weight' => 150),
    10 => array('id' => 10, 'anme' => '二等奖', 'weight' => 150),
    11 => array('id' => 11, 'anme' => '七等奖', 'weight' => 150),
);
if (!file_exists("./data.txt")) {
    file_put_contents("./data.txt", json_encode($data));
}


$res = chouJiang::countWeight();
$data = null;
$a=rand(1, 29);
if (!$res) {
    $data['state'] = 0;
    $data['message'] = "所有奖品都已经抽完啦!";
    $data['data'] = $res;
    $data['arang']=$a;
} else {
    $data['state'] = 1;
    $data['message'] = "";
    $data['data'] = $res;
    $data['arang']=$a;
}
echo json_encode($data);
exit();



