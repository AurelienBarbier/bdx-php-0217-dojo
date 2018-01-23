<?php

namespace Dojo\Trim;
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19/06/17
 * Time: 17:52
 */
class Trim
{

    /**
     * Enleve les espaces au début et à la fin de la chaine $chaine.
     *
     * @param string $chaine
     * @return string
     */
    public static function myTrim($chaine)
    {
        $start = 0;
        while($chaine[$start] === " "){
            $start ++;

        }
        $end = strlen($chaine) -1;

        while ($chaine[$end] ===' '){


            $end --;
        }
        $output = '';
        for($j=$start;$j<=$end;$j++){
            $output = $output . $chaine[$j];
        }

        return $output;

    }

}