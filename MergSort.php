<?php
    $arr = [334, 23, 56, 233, 4666, 99284, 253, 56, 4];
    function mergeSort($arr){
        if(count($arr) === 1) return $arr;

        $middle = floor(count($arr)/2);

        $leftArray = array_slice($arr, 0, $middle);
        $rightArray = array_slice($arr, $middle);
        return merge(mergeSort($leftArray), mergeSort($rightArray));
    }
    function merge($leftArray, $rightArray){
        $array = [];
        $i = 0;
        $j = 0;
        while($i<count($leftArray) && $j<count($rightArray)){
            if($leftArray[$i]<$rightArray[$j]){
                array_push($array, $leftArray[$i]);
                $i++;
            }else{
                array_push($array, $rightArray[$j]);
                $j++;
            }
                
        }
        return [...$array, ...array_slice($leftArray, $i), ...array_slice($rightArray, $j)];
    }
    
    print_r(mergeSort($arr));

?>