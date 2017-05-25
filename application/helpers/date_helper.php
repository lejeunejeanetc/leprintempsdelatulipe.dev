<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('convert_day'))
{
    function convert_day($day)
    {
    switch ($day)
    {
        case 1:
            $day = "lundi";
            return $day;
            break;
        case 2 : 
            $day = "mardi";
              return $day;
            break;
        case 3 : 
             $day = "mercredi";
               return $day;
            break;
        case 4 : 
            $day = "jeudi";
              return $day;
            break;
        case 5 : 
            $day = "vendredi";
              return $day;
            break;
        case 6 : 
            $day = "samedi";
              return $day;
            break;
        case 0 : 
            $day = "dimanche";
              return $day;
            break;
    }
    }   
}
    ?>
