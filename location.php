<?php 
    
    $input = file_get_contents('php://input');
    $data = json_decode($input);

    $array = array(array('39.908419','116.397572'),array('39.912765','116.408386'),array('39.912370','116.420403'),array('39.915793','116.427097'),array('39.896568','116.419888'),array('39.903547','116.415081'),array('39.901967','116.404266'),array('39.906708','116.430531'),array('39.910526','116.421604'),array('39.902889','116.432934'),array('39.907432','116.416540'),array('39.908683','116.409845'));

    foreach ($array as $arr) {
    	if (($data->minLat < $arr[0] && $data->maxLat > $arr[0]) && ($data->minLng < $arr[1] && $data->maxLng > $arr[1])) {
    		$result[] = $arr;
    	}
    }

    echo json_encode($result);
    exit;