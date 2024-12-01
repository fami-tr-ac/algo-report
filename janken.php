<?php
    while($num = trim(fgets(STDIN))) { 
        $input_list[] = explode(" ", $num);
    }

    $count = 0;
    
    foreach ($input_list as $value) {
        if (count($value) > 1) {
            if ($value[0] === 'G' && $value[1] === 'C') {
                $count++;
            }
            if ($value[0] === 'C' && $value[1] === 'P') {
                $count++;
            }
            if ($value[0] === 'P' && $value[1] === 'G') {
                $count++;
            }
        }
    }
    echo $count;
?>