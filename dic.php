<?php
ini_set('memory_limit', '2G');
set_time_limit(30);
include "class.php";
$file_lines = 'alpha.txt';
$time_start = microtime(true);

$unknown_word = "asiusd";

validate_character_number($unknown_word, 3, 8);
$words = create_possible_arrays($unknown_word);
$list_me = [];

//print_r($possible);
$time_end = microtime(true);
$execution_time = ($time_end - $time_start);
//echo 'Total Execution Time:' . $execution_time . ' secs';
