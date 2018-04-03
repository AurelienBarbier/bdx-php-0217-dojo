<?php

echo 'Hello World !';
echo "\n";

$ARN1 = 'GAGCCTACTAACGGGAT';
$ARN2 = 'CATCGTAATGACGGCCT';
$i = 0;
$errors = 0;
$marker = '';



$arnLength = strlen($ARN1);

while ( $i < $arnLength  )
{
    if ( $ARN1[$i] != $ARN2[$i] )
    {
      $errors++;
      $marker .= '^';
    }
    else {
      $marker .=' ';
    }

    $i++;
}

echo $errors;
echo "\n";
echo $ARN1;
echo "\n";
echo $ARN2;
echo "\n";
echo $marker;
