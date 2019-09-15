<?php



function create_possible_arrays($string)
{
    $time_start = microtime(true);
    $letters = str_split($string);
    $combos = [];
    $lastres = $letters;
    for ($i = 1; $i < count($letters); $i++) {
        $newres = [];
        foreach ($lastres as $r) {
            foreach ($letters as $let) {
                if ($r !== $let){
                    $new = $r . $let;
//                    if (!in_array($new, $newres)) {
                        $newres[] = $new;
                        array_unique($newres);
                        if (strlen($new) > 2) {
                            $combos[] = $new;
//                        }
                    }
                }
            }
        }
        $lastres = $newres;
    }
    $time_end = microtime(true);
    $execution_time = ($time_end - $time_start);
    echo 'Total Execution Time:' . $execution_time . ' secs';
    return $combos;
}
