<?php
    //include 'file.php';
    //require 'file.php';

    // INCLUDE will give WARNING
    // REQUIRE will give error

    // ONCE only loads file one time

    // $arr = require_once 'check.php';

    // print_r($arr);

    // echo $x;
    // $x++;
    
    // require_once 'check.php';

    // echo $x;

    // echo "Hello World";

//     echo foo();

//     function foo() {
//         return "Hello World";
//     }
// //    echo ch();


//     if(true) {
//         function ch() {
//             return "Check";
//         }
//     }


//     echo foo();


        // function foo() {
        //     echo "Foo";

        //     function ch() {
        //         echo "Check";
        //     }
        // }
    

        // foo();
        // ch();


        // function foo() : int|float|array {
        //     return 0;
        // }

        
        // function foo() : mixed {
        //     return 0;
        // }

        // function foo() : ?int {
        //     return null;
        // }
        // echo foo();

        // ? allows NULL

        // declare(strict_types=1);
        // function foo( $x, $t) {
        //     echo $x, $t, $f;
        //     return $x * $t;
        // }


        //echo foo(12.2);
        
        //echo foo(1,2);

        // function ch(&$y) {
        //     $y = 10;
        // }

        // $y = 12;
        // ch($y);
        // echo $y;

        // function sum(...$numbers) {
        //     return array_sum($numbers);
        // }

        // echo sum(1, 2, 3);

        // function mul($x, int ...$numbers) {
        //     return array_sum($numbers)  * $x;
        // }

        // echo mul(5, 4, 3);


        // $numbers = [1, 2, 3, 4];
        // echo mul(12, ...$numbers);

        // function sum($x, $y) {

        //     return $x + $y;
        // }

        // echo sum(y : 1, x : 2);

        // $arr  = ['y' =>1, 'x' => 2];

        // function sum($x, $y) {
        //     var_dump($x, $y);
        //     return $x + $y;
        // }
    
        // echo sum(...$arr);