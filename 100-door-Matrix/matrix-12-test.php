<?php

/**
 * 
 * 
 * 
 */
 
require_once "productionDoors.php";
 
if (is_array ($doors))
    echo '  The hallway of doors does exist. ';
    
    
if (assert (count ($doors) == 10 ))
    echo ' there are ten doors here';
    
    
function open_closed ($doors)
{
    for ($i = 1; $i <= 10; $i++)
    {
        assert ($doors [$i] == 'open');
        echo $i  'door' $doors[$i];
    }
    
}