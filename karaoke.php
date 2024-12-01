<?php
// Your code here!
    while($num = trim(fgets(STDIN))) {
            $input_array[] = explode(” “, $num);
    }
    $expected = array_slice($input_array, 1, $input_array[0][1]);
    $result1 = array_slice($input_array, $input_array[0][1] * 1 + 1, $input_array[0][1]);
    $result2 = array_slice($input_array, $input_array[0][1] * 2 + 1, $input_array[0][1]);
    $goukei = 0;
    $tensuu = [];
    for ($a = 1; $a < $input_array[0][0]; $a++) {
        $result = array_slice($input_array, $input_array[0][1] * $a + 1, $input_array[0][1]);
        
        for ($i = 0; $i < $input_array[0][1]; $i++) {
            var_dump($i);
            // var_dump($expected[$i][0]);
            var_dump($result);
            $diff = abs($expected[$i][0] - $result[$i][0]);
            // var_dump($diff);
            if ($diff == 0) {
                $goukei = $goukei + 0;
            }
            elseif ($diff <= 10) {
                $goukei = $goukei + 1;
            }
            elseif ($diff <= 20) {
                $goukei = $goukei + 2;
            }
            elseif ($diff <= 30) {
                $goukei = $goukei + 3;
            }
            else {
                $goukei = $goukei + 5;
            }
        }
        $tensuu[] = 100 - $goukei;
    }

    max($tensuu);