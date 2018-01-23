<?php

namespace Dojo\Likes;

class Likes
{

    public static function display($users = null){
        if (empty($users)){
            return 'Be the first to like';
        }

        if (is_array($users)) {
            $nbUsers = count($users);

            switch ($nbUsers){
                case 3:
                    return $users[0] . ', ' . $users[1] . ' and ' . $users[2] . ' like';
                    break;
                case 2:
                    return $users[0] . ' and ' . $users[1] . ' like';
                    break;
                case 4:
                case 5:
                case 6:
                case 8:
                    return $users[0] . ' and ' . ($nbUsers - 1) . ' others users like';
                    break;
                default:
                     //comportement
                    break;
            }


        }else{

            return $users . ' likes';
        }


    }
}