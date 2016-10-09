<?php
date_default_timezone_set("Asia/Krasnoyarsk");
$jsonString = file_get_contents("application.json");
class parse {
    public function parseJson($arrayJson) {
        $arrEvents = array();
        foreach ($arrayJson[events] as $key => $val) {
            $data = json_decode($val[data], true);
            $arrEvents[$key]['event'] = $val[event];
            $arrEvents[$key]['timestamp'] = $val[timestamp];
            $arrEvents[$key]['time_on'] = $data[time_on];
            $arrEvents[$key]['type'] = $data[type];
        }
        usort($arrEvents, function ($a, $b) {
            return ($b[time_on] - $a[time_on]);
        });
        return $arrEvents;
    }
}





