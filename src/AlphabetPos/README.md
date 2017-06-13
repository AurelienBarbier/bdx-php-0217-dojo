# AlphabetPos

## Enonce
Retourne une chaine de caractères contenant la position dans l'alphabet :

 * "test"                              => "20 5 19 20"
 * "message de test"                   => "13 5 19 19 1 7 5 4 5 20 5 19 20"
 * "Je suis le message de test FINAL"  => "10 5 19 21 9 19 12 5 13 5 19 19 1 7 5 4 5 20 5 19 20 6 9 14 1 12"

##CLI
Tests : ./vendor/bin/phpunit tests/AlphabetPosTest.php