<?php

// $name = "Apple";
// $score = 32.246;

// $info = "[$name][$score]";
// echo $info . PHP_EOL;

// $info = sprintf("[%15s][%10.2f]", $name, $score);
// echo $info . PHP_EOL;

// $info = sprintf("[%-15s][%010.2f]", $name, $score);
// echo $info . PHP_EOL;

// printf("[%-15s][%010.2f]" . PHP_EOL , $name, $score);
// echo $info . PHP_EOL;

// $input = ' dot_taguchi  ';
// $input = trim($input);
// echo strlen($input) . PHP_EOL;
// echo strpos($input, '_') . PHP_EOL;

// $input = str_replace('_', '-', $input);
// echo $input . PHP_EOL;

// $input = ' こんにちは  ';
// $input = trim($input);
// echo mb_strlen($input) . PHP_EOL;
// echo mb_strpos($input, 'に') . PHP_EOL;

// $input = str_replace('にち', 'ばん', $input);
// echo $input . PHP_EOL;

// $input = '20200320Item-A  1200';
// $input = substr_replace($input, 'Item-B  ', 8, 8);

// $date = substr($input, 0, 8);
// $product = substr($input, 8, 8);
// // $amount = substr($input, 16, 4);
// $amount = substr($input, 16);

// echo $date . PHP_EOL;
// echo $product . PHP_EOL;
// // echo $amount . PHP_EOL;
// echo number_format($amount) . PHP_EOL;


// $input = 'Call us at 03-3001-1256 or 03-3015-3222';
// $pattern = '/\d{2}-\d{4}-\d{4}/';

// preg_match($pattern, $input, $matches);
// print_r($matches);
// preg_match_all($pattern, $input, $matches);
// print_r($matches);

// $input = preg_replace($pattern, '**-****-****', $input);
// echo $input . PHP_EOL;


// $d = [2020, 11, 15];
// echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
// echo implode('-', $d) . PHP_EOL;

// $t = '23:30:22';
// print_r(explode(':', $t));


// $n = 5.6283;

// echo ceil($n) . PHP_EOL;
// echo floor($n) . PHP_EOL;
// echo round($n) . PHP_EOL;
// echo round($n, 2) . PHP_EOL;

// echo mt_rand(0, 6) . PHP_EOL;

// echo max(3, 9, 4) . PHP_EOL;
// echo min(3, 9, 4) . PHP_EOL;

// echo M_PI . PHP_EOL;
// echo M_SQRT2 . PHP_EOL;



// $scores = [30, 40, 50];

// array_unshift($scores, 10, 20);
// array_push($scores, 60, 70);
// $scores[] = 80;

// array_shift($scores);
// array_pop($scores);

// print_r($scores);



// $scores = [30, 40, 50, 60, 70];
// $partial = array_slice($scores, 2, 3);
// $partial = array_slice($scores, 2);
// $partial = array_slice($scores, -2);

// print_r($scores);
// print_r($partial);



// $scores = [30, 40, 50, 60, 70, 80];

// array_splice($scores, 2, 3);
// array_splice($scores, 2, 3, 100);
// array_splice($scores, 2, 0, [100, 101]);

// print_r($scores);



$scores = [40, 50, 20, 30];

sort($scores);
print_r($scores);

shuffle($scores);
print_r($scores);

$picked = array_rand($scores, 2);
echo $scores[$picked[0]] .  PHP_EOL;
echo $scores[$picked[1]] .  PHP_EOL;


