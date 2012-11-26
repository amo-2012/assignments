<?php
/**
 * testing module for the Matrix dojo
 *
 * Imagine a hallway (from the Matrix) with 50  doors on each side
 *
 * Walk to the end of the hall and back up, opening every door
 *
 * On the 2nd pass, close all the even numbered doors
 *
 * On the 3rd pass, for each third door, close if opened, and open if closed =>  CHANGE ITS STATE
 *
 * Repeat .
 *
 * What is the state of the doors after 100 passes?   
 */

require_once "Matrix-PROD.php";

// This section is to determine if an array $doors exists.
if  ( is_array ($doors))
     echo 'doors array exists'; 

// This is to determine if $doors has 100 items in it.    
if (assert (count ($doors) ==100) )
    echo ' 100 items exist in this array';


/* 
* This is a function that looks at every door 
* using a loop to see if its opened or closed.
*/

function  test_doors ($doors)
{
    for ( $i = 1; $i <= 100; $i++)
    {
        assert ($doors [ $i ] == 'open');
        echo $i . ' door ' . $doors [$i];
    }/* end for loop */
} /* end function test_doors */

//test_doors ($doors);

function test_doors_2 ( $doors )
{
for ( $i = 1; $i <= 100; $i++)

{
    if (( $i % 2 ) == 0 )
       if ( assert ($doors [ $i ] == 'closed') )
            echo $i . ' is now closed      ';
        
} /* end for loop */       
} /* end function test_doors_2 */
test_doors_2 ($doors);
  
  
// this function will now switch the state of every 3rd door 
  
  function test_doors_3 ( $doors )
{
for ( $i = 1; $i <= 100; $i++)

    {
    if (( $i % 3 ) == 0 )
       if ( assert ($doors [ $i ] == 'closed') )
            echo $i . ' is now closed      ';
        
    }   
    
    if $i ='closed' == 'open'
} 
test_doors_3 ($doors);
   