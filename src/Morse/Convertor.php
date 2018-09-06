<?php

namespace Dojo\Morse;

class Convertor
{

  //const MORSE =

  public static function morseToLatin($code){
    $morse = [
      "-.-.--" => "!",
      "....-" => "4",
      "..--.." => "?",
      "--..--" => ",",
      ".-.-.-" => ".",
      "..---" => "2",
      "...--" => "3",
      "--..." => "7",
      "-...." => "6",
      "....." => "5",
      "---.." => "8",
      "-..." => "B",
      "----." => "9",
      ".--." => "P",
      "-----" => "0",
      "--.." => "Z",
      "-.--" => "Y",
      "-..-" => "X",
      "-.-." => "C",
      "...-" => "V",
      ".----" => "1",
      "..-." => "F",
      "...." => "H",
      ".---" => "J",
      "--.-" => "Q",
      "-..-." => "/",
      ".-.." => "L",
      "..." => "S",
      "---" => "O",
      "-.-" => "K",
      ".-." => "R",
      "..-" => "U",
      "-.." => "D",
      ".--" => "W",
      "--." => "G",
      "-." => "N",
      "--" => "M",
      ".." => "I",
      ".-" => "A",
      "-" => "T",
      "." => "E",
    ];

    $characters = explode(" ", $code);
    $result = "";
    foreach ($characters as $character) {
          $result = $result . $morse[$character];
    }
    return $result;
  }
}
