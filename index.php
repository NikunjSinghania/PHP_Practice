<?php

    //echo "Hello World" .print 'Hello World';
    //print returns 1

    //print "Hello" . "    " . "World";

    // echo 'Joe\'s Name';

    // //OR


    // echo "Joe's Name";

    //$_name_ = "Joe";

    // $x = 1;
    // $y = 2;

    // ASSIGN BY VALUE

    // $z = &$y; // BY REF
    // $y = 100;
    // $z = 1212;
    // echo $y;

    //$_name_ = "Blcok";

    // echo "Hello \$_name_"; // NOT VARIABLE

    // echo "Hello $_name_";

    //echo "Hello " . $_name_;

    //CONST

    // DEFINE AT RUNTIME
    // define("CD", "DATA");
    // echo defined("CD"); // CHECKS FOR DEFINE
    // echo CD;

    // // CONSt at COMPKLE
    // const FOO = 'VALUE';
    // echo FOO;


    //echo PHP_VERSION;

    //echo __DIR__; // MAGIC CONST

    // VARIABLES VAIABLES

    // $foo = "BAR";

    // $$foo = 'VALUE';

    //echo "$foo, $BAR";
    //echo "$foo, ${$foo}";
    //echo "$foo, {$$foo}";


    // $b = true;
    // $i = 123123;
    // $f = 0.1231;
    // $s = "asasd";

    // echo gettype($i);

    // var_dump($f);

    // $companies= [ 1, 2, 3, 4, 5];
    // echo $companies;
    // print($companies);
    // print_r($companies);

    // $n = null;
    // echo $n;

    //declare(strict_types=1);
    //STRICT


    // function sum(int $i,int $y) {
    //     var_dump($i, $y);
    //     return $i + $y;
    // }

    // echo sum(1,2);
    // echo var_dump(sum(1, '212'));

    // $x = (int)'121';
    // echo $x;

    // $b = 'false'; // TRUE
    // $b = false;
    // $b = 0;   //ALLL ARE FALSE
    // $b = 0.0;
    // $b = "";
    // $b = '0';
    // $b = [];
    // $b = null;

    // if($b) {
    //     echo var_dump((string)$b);
    // }
    // else {
    //     echo var_dump((string)$b);
    // }


    // echo var_dump(PHP_INT_MAX);
    // echo var_dump(PHP_INT_MAX+1);
    // echo (int)0.23;
    // echo (int)null;

    // var_dump(is_int(3.2));
    // $x = 22_22_22_22;
    // echo $x;

    // $x = 123.123;
    // var_dump($x);

    // echo PHP_FLOAT_MIN;
    // echo PHP_FLOAT_MAX;

    // echo floor($x);

    //echo ceil(0.8);

    // echo NAN;
    // echo INF;
    // echo is_nan(log(-1));
    // echo is_finite(1);

    //echo (float)'f2'; // 0

    //"" CAN USE VARIABLES

    //'' CAN NOT

    // $x = "Maths";

    // echo "${x} Hello";

    // echo $x[1];
    // $x[1] = "G";
    // echo $x;

    // $x[10] = "F";
    // echo $x;

    // $x = 121;
    // //HERDOC
    //     $text = <<< TEXT
    //     LINE $x
    //     LINE
    //     LINE
    //     TEXT;

    //     echo nl2br($text);
    // // NOWDOC

    //     $text = <<< 'TEXT'
    //     LINE $x
    //     LINE
    //     LINE
    //     TEXT;

    //     echo nl2br($text);
    
    // echo var_dump($x);
    // $x= null;
    // echo var_dump($x);
    // echo is_null($x);
    // echo $x === null;
    
    // unset($x);

    // null -> string = ""
    //      -> int = 0

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <!-- <?php
            echo "Check"
        ?> -->

        
    </h1>
    <!-- <?php echo "ITS HTML" ?>
    <?= "ANITHER" ?> -->

    <?php
            echo "<h1>Another Check</h1>";
        ?>
</body>
</html>