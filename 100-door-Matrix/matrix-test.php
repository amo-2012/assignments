<?php
/** 100 door hallway. At first pass, open all the doors.
 * at 2nd pass, close every other door,
 * at 3rd pass, toggle every 3rd door
 * at 4th pass, toggle every 4th door.
 * 
 * this file will set up the tests.
 * 
 */
 require_once "productionDoors.php";
 
 if (is_array ($doors))
    echo '        The hallway is there';
    
    
if (assert (count ($doors) ==10 ) )
    echo '   and there are 10 doors in the hallway';
                  // will add more doors once the pattern is established
                  
                  
function open_closed ($doors)
    {
        for ($i = 1; $i <= 10; $i++)
        {
            assert ($doors [$i] == ' open   ');
            echo $i . 'door' . $doors [$i];
        }
    }
 
function test_evenDoors ($doors)
    {
        for ( $i =1; $i <=10; $i++)
        {
            if (($i %2 ) == 0)
                if (assert ($doors [$i] == 'closed'))
                echo $i . '  is now  CLOSED   ';                
              
        }
        
    }
    
test_evenDoors ($doors);