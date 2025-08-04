<?php

$input = ["apple", "banana", "kiwi", "mango", "tea"];

function getEvenLength($arr) {
    $result = [];

    for ($i = 0; $i < count($arr); $i++) {
        if (strlen($arr[$i]) % 2 === 0) {
            $result[] = $arr[$i];
        }
    }

    return $result;
}

$output = getEvenLength($input);

print_r($output);

?>