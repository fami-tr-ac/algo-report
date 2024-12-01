<?php
    while($num = trim(fgets(STDIN))){ 
        $input_array[] = explode(" ", $num);
    }
    $input_array_count = count($input_array);
    // 抽選番号の作成
    $selection_numbers = $input_array[$input_array_count - 1];
    array_push($selection_numbers, '0');

    // 横列の作成
    $line_list = [];
    for ($i = 1; $i < count($input_array) - 1; $i++) {
        $line_list[] = $input_array[$i];
    }
    
    // 縦列の作成
    $row_list = [];
    for ($i = 0; $i < count($line_list); $i++) {
        $row_list[] = array_column($line_list, $i);
    }

    // 斜め1の作成
    $naname_list1 = [];
    for ($i = 0; $i < count($line_list); $i++) {
        $naname_list1[] = $line_list[$i][$i];
    }
    
     // 斜め2の作成
    $naname_list2 = [];
    for ($i = 0; $i < count($line_list); $i++) {
        $naname_list2[] = $line_list[$i][count($line_list) - 1 -$i];
    }

    // 答えの計算
    $relust_count = 0;
    foreach ($line_list as $value) {
       if (empty(array_diff($value, $selection_numbers))) {
        $relust_count++;
        }
    }
    foreach ($row_list as $value) {
       if (empty(array_diff($value, $selection_numbers))) {
        $relust_count++;
        }
    }
    if (empty(array_diff($naname_list1, $selection_numbers))) {
        $relust_count++;
    }
    if (empty(array_diff($naname_list2, $selection_numbers))) {
        $relust_count++;
    }
   
   
   echo $relust_count;

?>