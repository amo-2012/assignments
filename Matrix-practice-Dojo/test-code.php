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

if (assert(count($doors) == 100))
    echo 'Passed: doors = 100';
    
if (assert ($doors[100] == 'Open'))
    echo 'Passed: doors = Open';
    
    
/* 
Create a function to switch the state of the doors;  if OPENED, close;  if CLOSED, then open the door.
*/
function switch_state ()
  {
  if closed ($open);
   else close;
  }
  
  
   