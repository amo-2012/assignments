<?php

/**
* production code for the matrix
*/

$doors = array();
$doors = array_fill(1,10, 'closed');

print_r(array_values($doors));

for ($i =1; $i <=10; $i++)
{
    if ($doors [$i] == 'closed');
    $doors [$i ] = 'open';
    }

print_r(array_values($doors));


for ($i = 1; $i <=10; $i++)

    { 
        if (($i % 2) == 0)
        {
         if ($doors [$i] == 'open');
        $doors [$i] = 'closed';
        }
  
    }
 print_r(array_values($doors));   
    

