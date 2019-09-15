<?php
class Word {
    private funtion validate_character_number($word, $min, $max)
    {
        $input = str_replace(" ", "", $word);
        $count = strlen($input);
        if ($count < $min || $count > $max) {
        echo "Word should be $min to $max Character";
    }   
}