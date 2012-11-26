<?php

/**
    *this is the production code for the Matrix dojo
 
*/

echo "Enter the Matrix - The 100 door Toggle";

// Create an array and fill it. The initial state of the doors is closed.
$doors= array ( ); 
$doors = array_fill (1,100,'closed');


// PASS 1:  If the door is closed we're opening it.
for ($i = 1; $i <= 100; $i++ )
{
    if ( $doors [ $i ] == 'closed')
         $doors [ $i ] = 'open'; 
         echo  'door [$i] .  is now open ;
}

// Pass 2: Toggle from open to close on EVEN doors
for ($i = 1; $i <= 100; $i++ )
{  
   if (( $i % 2 ) == 0 )
    {
        if ( $doors [ $i ] == 'open')
         $doors [ $i ] = 'closed'; 
    } /* end if */    
}/* end for loop */ 