<?php
    /**
     * 冒泡排序
     */
    function bubbleSort ($array)
    {
        if (empty($array)) {
        	return null;
        }

        for ($i = 0;$i < count($array);$i++) {
        	for($j = 0;$j < count($array) - $i -1;$j++) {
        		if ($array[$j] > $array[$j + 1]) {
        			$tmp = $array[$j];
        			$array[$j] = $array[$j +  1];
        			$array[$j + 1] = $tmp;
        		}
        	}
        }

        return $array;
    }

    /**
     *  快速排序
     */
    function quickSort ($array)
    {
    	if (empty($array)) {
    		return null;
    	}

    	$mid = $array[0];

    	$left = array();
    	$right = array();

    	for ($i = 1;$i < count($array);$i++) {
    		if ($array[$i] <= $mid) {
    			$left[] = $array[$i];
    		} else {
    			$right[] = $array[$i];
    		}
    	}

    	if (count($left) > 1) {
    		$left = quickSort($left);
    	}

    	if (count($right) > 1) {
    		$right = quickSort($right);
    	}

    	return array_merge($left,array($mid),$right);

    }

    /**
     *  选择排序
     */
    function selectionSort ($array)
    {
    	if (empty($array)) {
    		return null;
    	}
        
        $end = count($array) - 1;

    	for ($i = 0;$i < count($array);$i++) {    		
            
            $max = 0;

    		for ($j = 0;$j < count($array) - $i;$j++) {
                if ($array[$j] > $array[$max]) {
                	$max = $j;
                }
    		}

    		$tmp = $array[$end];
    		$array[$end] = $array[$max];
    		$array[$max] = $tmp;
    		$end--;
    	}

    	return $array;
    }

    /**
     *  插入排序
     *  (可优化)
     */
    function insertionSort ($array)
    {
    	if (empty($array)) {
    		return null;
    	}

    	$sortArray = array($array[0]);
        
        for ($i = 1;$i < count($array);$i++) {
        	$selectedElement = $array[$i];
        	for ($j = count($sortArray) - 1;$j >= 0;$j--) {
        		if ($sortArray[$j] <= $selectedElement) {
        			$sortArray[$j + 1] = $selectedElement;
        			break;
        		} else {
        			$sortArray[$j + 1] = $sortArray[$j];
        		}

        		if (0 == $j) {
        			$sortArray[0] = $selectedElement;
        		}
        	}
        }

    	return $sortArray;
    }