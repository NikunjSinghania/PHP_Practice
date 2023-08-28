 <?php
    // $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    // echo '<pre>';
    // print_r(array_chunk($arr, 2, true));
    // echo '</pre>'

    $arr1 = [22,2,3, 6, 7, 8];
    $arr2 = [4 => 4,3 =>5, 2 =>6];

    // echo '<pre>';
    //     print_r(array_combine($arr1, $arr2));
    // echo '</pre>';

    // echo '<pre>';
    //     print_r(array_filter($arr1, fn($el, $key) => $el % 2 == 0, ARRAY_FILTER_USE_BOTH));
    // echo '</pre>';

    // echo '<pre>';
    //     print_r(array_keys($arr1, 7));
    // echo '</pre>';

    // echo '<pre>';
    //     print_r(array_map(fn($num1, $num2) => $num1 * $num2, $arr1, $arr2));
    // echo '</pre>';

    // echo '<pre>';
    //     print_r(array_merge($arr1 , $arr2));
    // echo '</pre>';

    // echo '<pre>';
    //     print_r(array_reduce($arr1,
    //     fn($sum, $el) => $sum + $el,
    //     1000
    // ));
    // echo '</pre>';

    // echo '<pre>';
    //     print_r(array_search('7', $arr1));
    // echo '</pre>';

    // if(in_array(22, $arr1)) {
    //     echo 'Found';
    // }

    // echo '<pre>';
    //     print_r(array_diff($arr1, $arr2));
    // echo '</pre>';

    // echo '<pre>';
    //     print_r(array_diff_key($arr1, $arr2));
    // echo '</pre>';

//     echo '<pre>';
//         asort($arr1);
//         print_r($arr1);
//     echo '</pre>';


//     echo '<pre>';
//      ksort($arr2);
//     print_r($arr2);
// echo '</pre>';

    [$a, $b, $c, $d] = $arr1;
    echo $a, $b, $c, $d;