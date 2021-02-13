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



// $scores = [40, 50, 20, 30];

// sort($scores);
// print_r($scores);

// shuffle($scores);
// print_r($scores);

// $picked = array_rand($scores, 2);
// echo $scores[$picked[0]] .  PHP_EOL;
// echo $scores[$picked[1]] .  PHP_EOL;



// $scores = array_fill(0, 5, 10);
// $scores = range(1, 10);
// $scores = range(1, 10, 3);

// print_r($scores);

// echo array_sum($scores) . PHP_EOL;
// echo max($scores) . PHP_EOL;
// echo min($scores) . PHP_EOL;
// echo array_sum($scores) / count($scores) . PHP_EOL;




// $a = [3, 4, 8];
// $b = [4, 8, 12];

// $merged = array_merge($a, $b);
// // $merged = [...$a, ...$b];
// print_r($merged);

// $uniques = array_unique($merged);
// print_r($uniques);

// $diff1 = array_diff($a, $b);
// print_r($diff1);

// $diff2 = array_diff($b, $a);
// print_r($diff2);

// $common = array_intersect($a, $b);
// print_r($common);




// $prices = [100, 200, 300];

// $newPrices = array_map(
//   function ($n) { return $n * 1.1; },
//   // fn($n) => $n * 1.1,
//   $prices
// );

// print_r($newPrices);



// $numbers = range(1, 10);

// $evenNumbers = array_filter(
//   $numbers,
//   function ($fn) {
//     // if ($fn % 2 === 0) {
//     //   return true;
//     // } else {
//     //   return false;
//     // }
//     return $fn % 2 === 0;
//   }
//   // fn($n) => $n % 2 === 0;
// );

// print_r($evenNumbers);



// $scores = [
//   'taguchi' => 80,
//   'hayashi' => 70,
//   'kikuchi' => 60,
// ];

// $keys = array_keys($scores);
// print_r($keys);
// $values = array_values($scores);
// print_r($values);

// if (array_key_exists('taguchi', $scores) === true) {
  //   echo 'true' . PHP_EOL;
  // }
  // if (in_array(80, $scores) === true) {
    //   echo '80 is here!' . PHP_EOL;
    // }

    // echo array_search(70, $scores) . PHP_EOL;



$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// sort($scores);
// print_r($scores);
// rsort($scores);
// print_r($scores);

// asort($scores);
// print_r($scores);
// arsort($scores);
// print_r($scores);

ksort($scores);
print_r($scores);
krsort($scores);
print_r($scores);
