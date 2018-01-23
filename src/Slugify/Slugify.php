<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 17/10/17
 * Time: 10:33
 */

namespace Dojo\Slugify;


class Slugify
{

    public static function slug($text){
        $text = strtolower($text);
        $text = str_replace([" ", '!', ','], "-", $text);
        $text = trim($text,'-');

        return $text;
    }
}