<?php

/**
* production code for the matrix
*/


// set of hallway of doors
$doors = array();
$doors = array_fill(1,10, 'closed');

echo 'hallway of 10 closed doors:';
print_r(array_values($doors));


// 1st pass  - opening all the closed doors
for ($i =1; $i <=10; $i++)
{
    if ($doors [$i] == 'closed');
    $doors [$i] = 'open';
    }
echo '1ST PASS  -  opening all the closed doors  ';
print_r(array_values($doors));


//  2nd pass - closing / toggle every other door
for ($i = 1; $i <=10; $i++)

    { 
        if (($i % 2) == 0)
        {
         if ($doors [$i] == 'open');
        $doors [$i] = 'closed';
        }
  
    }
 print_r(array_values($doors));   
echo '2ND PASS - toggle every other door - was open.  E/O door is now closed ';

    
// 3rd pass  - toggle every 3rd door

for ($i=1; $i<=10; $i++)
{
    if (( $i % 3) == 0)
    {
        if ($doors [$i] == 'open');
        $doors [$i] ='closed';
      }
      
     else
        {
            if ($doors [$i] == 'closed')
            $doors [$i] = 'open';
         }
}
print_r(array_values($doors));
echo '3RD PASS - toggle every 3rd door >  if it was closed, now opened; if opened, now its closed     ';



// 4th pass  - toggle every 4th door

for ($i=1; $i<=10; $i++)
{
    if (( $i % 4) == 0)
    {
        if ($doors [$i] == 'open');
        $doors [$i] ='closed';
      }
      
     else
        {
            if ($doors [$i] == 'closed')
            $doors [$i] = 'open';
         }
}
print_r(array_values($doors));
echo '4th PASS - toggle every 4 door >  if it was closed, now opened; if opened, now it\'s closed';



// 5th pass  - toggle every 5th door

for ($i=1; $i<=10; $i++)
{
    if (( $i % 5) == 0)
    {
        if ($doors [$i] == 'open');
        $doors [$i] ='closed';
      }
      
     else
        {
            if ($doors [$i] == 'closed')
            $doors [$i] = 'open';
         }
}

print_r(array_values($doors)); 
echo ' 5th PASS - toggle every 5th door' ;



// 6th pass  - toggle every 6th door

for ($i=1; $i<=10; $i++)
{
    if (( $i % 6) == 0)
    {
        if ($doors [$i] == 'open');
        $doors [$i] ='closed';
      }
      
     else
        {
            if ($doors [$i] == 'closed')
            $doors [$i] = 'open';
         }
}

print_r(array_values($doors)); 
echo ' 6th PASS - toggle every 6th door' ;


// 7th pass  - toggle every 7th door

for ($i=1; $i<=10; $i++)
{
    if (( $i % 7) == 0)
    {
        if ($doors [$i] == 'open');
        $doors [$i] ='closed';
      }
      
     else
        {
            if ($doors [$i] == 'closed')
            $doors [$i] = 'open';
         }
}

print_r(array_values($doors)); 
echo ' 7th PASS - toggle every 7th door' ;