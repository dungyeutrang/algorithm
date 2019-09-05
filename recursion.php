<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * calculate factorial of number n
 *
 * @param $n
 * @return float|int
 */
function factorial($n)
{
    if ($n < 2) {
        return 1;
    }
    return $n * factorial($n - 1);
}

function fibonacci($n)
{
    if ($n <= 1) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

function findMax($list)
{
    if (empty($list)) {
        return null;
    } else if (!isset($list[1])) {
        return $list[0];
    } else {
        $max = array_pop($list);
        $maxChild = findMax($list);
        if ($max < $maxChild) {
            $max = $maxChild;
        }
        return $max;
    }
}



$listState = [];
$list_val = [];
$n = 4;

function permutation($k)
{
    global $listState;
    global $n;
    global  $list_val;
    for ($i = 1; $i <= $n; $i++) {
        if (!isset($listState[$i])) {
            $list_val[$k] =$i;
            $listState[$i] = 1;
            if($k == $n){
                print_r(implode($list_val)."\n");
            }else{
                permutation($k+1);
            }
            unset($listState[$i]);
        }
    }
}




function totalNumber($array, $n, $index){
    if(($n-1) == $index){
        return $array[$index];
    }
    return $array[$index] + totalNumber($array, $n, $index+1);
}

function printN($n){
    if($n==0){
        return ;
    }else{
        print($n);
        printN($n-1);
    }
}