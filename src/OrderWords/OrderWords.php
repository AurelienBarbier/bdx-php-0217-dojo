<?php

$sentence ="e2st 4test Ce1ci un3";
$finalSentence = [];
$words = explode(' ', $sentence);
foreach($words as $word) {
    for($i=0 ; $i<strlen($word); $i++){
        $letter=$word[$i];
        if (is_numeric($letter)) {
          var_dump($word);
          $newWord = str_replace($letter, '', $word);
          var_dump($newWord);
          //$finalSentence = [$letter => $word];
          $finalSentence[$letter] = $newWord;


        }
    }

}


ksort($finalSentence);


$clearSentence = implode(' ', $finalSentence);

var_dump($clearSentence);
