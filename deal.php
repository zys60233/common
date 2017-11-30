<?php

function precede ($pop, $input) {
    	$sign1 = ["+","-","*","/"];
    	$sign2 = ["(",")","#"];

    	if (is_int(array_search($pop, $sign1)) && is_int(array_search($input, $sign1))) {
    		if ("+" == $input || "-" == $input) {
    			return ">";
    		} else {
    			if ("+" == $pop || "-" == $pop) {
    				return "<";
    			} else {
    				return ">";
    			}
    		}
    	} else if (is_int(array_search($pop, $sign2)) && is_int(array_search($input, $sign1))) {
    		if ("(" == $pop || "#" == $pop) {
    			return "<";
    		} else {
    			return ">";
    		}
    	} else if (is_int(array_search($pop, $sign1)) && is_int(array_search($input, $sign2))) {
    		if ("(" == $input) {
    			return "<";
    		} else {
    			return ">";
    		}
    	} else {
    		if (("(" == $pop || "#" == $pop) && "(" == $input) {
    			return "<";
    		} else if (")" == $pop && (")" == $input || "#" == $input)) {
    			return ">";
    		} else if (("(" == $pop && ")" == $input) || ("#" == $pop && "#" == $input)) {
    			return "=";
    		} else {
    			return "";
    		}
    	}
    }

    function operate($f, $rel, $e) {
    	$rtn = 0;
    	switch($rel){
    		case "+": $rtn = $f + $e; break;
    		case "-": $rtn = $f - $e; break;
    		case "*": $rtn = $f * $e; break;
    		case "/"; $rtn = $f / $e; break;
    	}
    	return $rtn;
    }

?>

<?php
    $optr = array();
    $opnd = array();
    $optr[] = "#";

    $input = file_get_contents("./test.txt");
    $inputs = explode(" ", $input);
    
    $v = array_shift($inputs);

    while (true) {
    	if (0 == count($optr)) {
    		break;
    	} else {
    		if (is_numeric($v)) {
    			array_push($opnd, $v);
                $v = array_shift($inputs);
    			continue;
    		} else {
    			switch (precede(end($optr),$v)) {
    				case "<": { array_push($optr, $v); $v = array_shift($inputs); continue; }
    				case "=": { array_pop($optr); $v = array_shift($inputs); continue; }
    				case ">": { $relation = array_pop($optr);$b = array_pop($opnd); $a = array_pop($opnd); array_push($opnd, operate($a,$relation,$b)); continue; }
    			}
    		}
    	}
    }

    echo array_pop($opnd);

    