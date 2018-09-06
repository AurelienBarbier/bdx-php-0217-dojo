<?php
  require 'Convertor.php';

  $convert = new Dojo\Morse\Convertor();
  
if('SOS' === $convert->morseToLatin('... --- ...')){
  echo "Mon script fonctionne";
}else{
  echo "Mon script ne fonctionne pas";
}

if('WILD' === $convert->morseToLatin('.-- .. .-.. -..')){
echo "Mon script fonctionne";
}else{
echo "Mon script ne fonctionne pas";
}

if('WILD CODE' === $convert->morseToLatin('.-- .. .-.. -..   -.-. --- -.. .')){
echo "Mon script fonctionne";
}else{
echo "Mon script ne fonctionne pas";
}
