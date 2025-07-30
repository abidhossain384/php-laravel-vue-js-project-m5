<?php

$strings = ["Hello", "World", "PHP", "Programming",];

function vowelCount($strings) {

    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelCount = 0;

    for($i=0; $i<strlen($strings); $i++) {
        if(in_array($strings[$i], $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

for($i=0; $i<count($strings); $i++) {

    $originalString = $strings[$i];
    $totalVowel = vowelCount($originalString);
    $reverseString = strrev($originalString);

    echo "Original String: $originalString, Vowel Count: $totalVowel, Reversed String: $reverseString\n\n";
    
}