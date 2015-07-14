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
    1 => array('id' => 1, 'anme' => '二等奖', 'weight' => 15),
    2 => array('id' => 2, 'anme' => '三等奖', 'weight' => 25),
    3 => array('id' => 3, 'anme' => '四等奖', 'weight' => 50),
    4 => array('id' => 4, 'anme' => '未中奖', 'weight' => 150),
);
if (!file_exists("./data.txt")) {
    file_put_contents("./data.txt", json_encode($data));
}

$res = chouJiang::countWeight();
$data = null;
if (!$res) {
    $data['state'] = 0;
    $data['message'] = "所有奖品都已经抽完啦!";
    $data['count'] = 0;
    $data['data'] = $res;
} else {
    $data['state'] = 1;
    $data['message'] = "";
    $data['count'] = $res['count'];
    $data['data'] = $res;
}
echo json_encode($data);
exit();



