<?php

function precede ($pop, $input) {
    	$sign1 = ["+","-","*","/"];
    	$sign2 = ["(",")","#"];

    	if (array_search($pop, $sign1) && array_search($input, $sign2)) {
    		if ("+" == $input || "-" == $input) {
    			return ">";
    		} else {
    			if ("+" == $pop || "-" == $pop) {
    				return "<";
    			} else {
    				return ">";
    			}
    		}
    	} else if (array_search($pop, $sign2) && array_search($input, $sign1)) {
    		if ("(" == $pop || "#" == $pop) {
    			return "<";
    		} else {
    			return ">";
    		}
    	} else if (array_search($pop, $sign1) && array_search($input, $sign2)) {
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
    print_r ($inputs);

    foreach ($inputs as $v) {
    	# code...
    	if ("#" == $v) {
    		break;
    	} else {
    		if (is_numeric($v)) {
    			array_push($opnd, $v);
    			print_r($opnd);
    			continue;
    		} else {
    			switch (precede(array_pop($optr),$v)) {
    				case "<": { array_push($optr, $v); continue; }
    				case "=": { array_pop($optr); continue; }
    				case ">": { $relation = arrap_pop($optr);$b = array_pop($opnd); $a = array_pop($opnd); array_push($opnd, operate($b,$relation,$a)); continue; }
    			}
    		}
    	}
    }

    print_r($opnd);

    