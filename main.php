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


$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/';

preg_match($pattern, $input, $matches);
print_r($matches);
preg_match_all($pattern, $input, $matches);
print_r($matches);

$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL;