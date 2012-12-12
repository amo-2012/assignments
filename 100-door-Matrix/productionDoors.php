<?php
/**
 * this is the code for the production
 * 
 * 
 */
 
 echo "this is the production code for the 100 door matrix \n we are going to start with only 10 doors to establish the pattern before filling the array with 100 doors";
 $doors = array();
 $doors = array_fill (1,10,'closed');
 
 print_r(array_values($doors));
 
 for ($i = 1; $i <=10; $i++)
 {
     if ($doors [$i ] == 'closed')
        $doors [$i] = 'open';
        
     }
     
print_r(array_values ($doors));

// now I will toggle even door from closed to open
for ($i = 1; $i <=10; $i++)
{
    if (($i % 2) == 0)
    {
        if ($doors [$i] == 'open')
        $doors [$i ] = 'closed';
        
    }
}

print_r(array_values($doors));

//  I have a a results of the even doors being closed and the odd doors are opened.    
// SUCCESSFUL  2nd pass !


