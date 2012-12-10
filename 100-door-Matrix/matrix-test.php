<?php
/** 100 door hallway. At first pass, open all the doors.
 * at 2nd pass, close every other door,
 * at 3rd pass, toggle every 3rd door
 * at 4th pass, toggle every 4th door.
 * 
 * this file will set up the tests.
 * 
 */
 require_once "production.php";
 
 if (is_array ($doors))
    echo 'the hallway is there';
    
    
if (assert (count ($doors) ==10 ) )
    echo '   and there are 10 doors in the hallway';