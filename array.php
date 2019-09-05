<?php

/*This project demo for structure and algorithm array. search, update, delete, insert*/

/**
 * find max element value of array
 *
 * @param $list
 * @param bool $default
 * @return int|mixed
 */
function findMax($list, $default = false)
{
    if ($default) {
        return max($list);
    }
    $len = count($list);
    $max = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($list[$i] > $max)
            $max = $list[$i];
    }
    return $max;
}
echo '<pre>';

/**
 * get element at index
 *
 * @param $list
 * @param $value
 * @param $index
 * @return mixed
 */
function updateElementAtIndex($list, $value, $index)
{
    if (isset($list[$index])) {
        $list[$index] = $value;
    }
    return $list;
}

function addElementToArray($array, $position, $value){
    $count = count($array);
    if($position < 0){
        return $array;
    }
    if($position>=$count){
        $array[$count] = $position;
        return $array;
    }
    for($i = $count; $i> $position; $i--){
        $array[$i]= $array[$i-1];
    }
    $array[$position] = $value;
    return $array;
}

function deleteElementOfArray($array, $position){
    $count = count($array);
    if($position<0 || $position >=$count){
        return $array;
    }
    for($i=$position; $i<$count-1; $i++){
        $array[$i]= $array[$i+1];
    }
    unset($array[$count-1]);
    return $array;
}
