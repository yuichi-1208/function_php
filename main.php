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

$input = ' dot_taguchi  ';
$input = trim($input);
echo strlen($input) . PHP_EOL;
echo strpos($input, '_') . PHP_EOL;

$input = str_replace('_', '-', $input);
echo $input . PHP_EOL;
