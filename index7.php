<?php
    // $x = 10;

    // function foo() {
    //     global $x;

    //     $x =20;

    //     echo $x;
    // }

    // foo();

    // print_r($GLOBALS);

    // echo $GLOBALS['x'];

    // echo $x;

    // function getvalue() {
    //     static $value = null;

    //     if($value == null) {
    //         echo "FUN";

    //         $value = foo();
    //     }
    //     echo "CH";

    //     return $value;
    // }


    // function foo() {
    //     echo "PROCESS";
    //     sleep(3);

    //     return 1;
    // }

    // echo getvalue();

    // echo getvalue();

    // echo getvalue();

    //  function sum(...$numbers) {
    //     return array_sum($numbers);
    //  }

    //  $x = 'sum';

    //  if(is_callable($x)) {
    //     echo $x(1, 2, 3, 4);
    //  }else {
    //     echo 'Not Callable';
    //  }

    // $x = 10;

    // $sum = function (...$numbers) use ($x) {
    //     echo $x;
    //     $x = 20;
    //     return array_sum($numbers);
    // };

    // echo $sum(1,2,3,4,5,6,7,8,9,0);
    // echo $x;

    $arr = [1,2,3,4];

    // $retarr = array_map(function($i) {
    //     echo $i*100;
    // }, $arr);
    
    // $x = function ($el) {
    //     return $el / 100;
    // };

    // $retarr = array_map($x, $arr);

    // function calc($el) {
    //     return $el * 120;
    // }

    // $sum = function (callable $call, ...$numbers) {
    //     return $call(array_sum($numbers));
    // };
    
    //$retarr = array_map('calc', $arr);
    //print_r($retarr);

    // echo $sum('foo', 1, 2, 3, 4);

    // function foo($el) {
    //     return $el * 100;
    // }

    // $retarr = array_map(fn($num) => $num * 10
    // , $arr);

    // print_r($retarr);