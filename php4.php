<?php //php 7.0.8

   // echo "Hello, world! ";

function minimumMoves($arr1, $arr2) {
    // Write your code here
    $n = count($arr1);
    $min_moves = 0;
    if( $n == count($arr2) ){
        for($i=0; $i < $n; $i++) {

            $arrr1 = str_split($arr1[$i]);
            $arrr2 = str_split($arr2[$i]);
            for($j = 0; $j < count($arrr1); $j++ ) {
                $diff = @$arrr1[$j] - @$arrr2[$j];
                $min_moves += abs($diff);
            }
        }
    }
    return $min_moves;
}

$arr1 = [123,234,1213];
$arr2 = [223,134,3212];
echo minimumMoves($arr1, $arr2);


---------------------------------------------------------------------------
---------------------------------------------------------------------------


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr1_count = intval(trim(fgets(STDIN)));

$arr1 = array();

for ($i = 0; $i < $arr1_count; $i++) {
    $arr1_item = intval(trim(fgets(STDIN)));
    $arr1[] = $arr1_item;
}

$arr2_count = intval(trim(fgets(STDIN)));

$arr2 = array();

for ($i = 0; $i < $arr2_count; $i++) {
    $arr2_item = intval(trim(fgets(STDIN)));
    $arr2[] = $arr2_item;
}

$result = minimumMoves($arr1, $arr2);

fwrite($fptr, $result . "\n");

fclose($fptr);