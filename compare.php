<?php
    $input = str_split(file_get_contents("./input.txt"));
    $array = array();
    $error = 0;

    foreach ($input as $v) {
    	if ("(" == $v || "[" == $v) {
    		$array[] = $v;
    	} else {
    		if (empty($array)) {
    			$error = 1;
    			break;
    		} else {
    			if (")" == $v) {
    				$pop = array_pop($array);
    				if ("(" == $pop) {
    					continue;
    				} else {
    					$error = 1;
    					break;
    				}
    			} else if ("]" == $v) {
    				$pop = array_pop($array);
    				if ("[" == $pop) {
    					continue;
    				} else {
    					$error = 1;
    					break;
    				}
    			}
    		}
    	}
    }

    if (empty($array)){

    } else {
    	$error = 1;
    }

    if ($error) {
    	echo "error";
    } else {
    	echo "ok";
    }