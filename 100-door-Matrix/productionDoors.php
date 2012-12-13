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
echo 'Pass 1 - doors status: ';     
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
echo 'Pass 2 - doors status: ';
print_r(array_values($doors));

//  I have a a results of the even doors being closed and the odd doors are opened.    
// SUCCESSFUL  2nd pass !



// now for my 3rd trick, I toggle every 3rd door   >   3RD PASS

for ($i =1; $i <=10; $i++)
{
    if (($i % 3) == 0)
    {
        if ($doors [$i] == 'closed')
        $doors [ $i] = 'open';
    }
    else
    {
        if ($doors [$i] == 'open')
        $doors [$i] = 'closed';
       
    }
    
}
echo 'Pass 3 - doors status: ';
print_r (array_values($doors));


// for 4th pass, we will toggle every 4th door

for ($i=1; $i <=10; $i++)
{
    if (($i %4 ) == 0)
    {
        if ($doors [$i] == 'closed')
        $doors [$i] = 'open';
    }
    else
    {
        if ($doors [$i] == 'open')
        $doors [$i] = 'closed';
    }
}
echo 'Pass 4 - doors status: ';
print_r(array_values($doors));
