# Homework 2.1 - Ever wonder what all these signs say?

For Homework 1.1, you found a nice project on Github, forked it into your own account, and cloned it into your Cloud 9 IDE account.
For this assignment, 
pick one or more PHP files from your project (you DID pick a PHP project, didn't you?) and identify some of the following items of PHP grammar and vocabulary 
that we talked about in class, including but not limited to:

* Variables: $name
* Constants: E_USER_WARNING, MY_AWESOME_CONSTANT
* Arithmetic operators: addition (+), subtraction (-)
* Functions: array_slice(), do_something_amazing()

When you find one, identify the file and line number in this file, below the instrcutions per the example below. 
Try to make the indentation match the original file (yes, copy and paste), even if that means there's NO indentation. Crazy PHPers.

You don't have to identify EVERYTHING in a given line or even in a single file, but you may get extra points if
you're thorough or make a survey of more than one file... And you might get docked if you make too much work for me. ;)

When you're done editing this file, save it, commit it, and push it to your forked version of the "assignments" repo. 
Then open a pull request back to the original. YOU WILL NOT GET CREDIT IF YOU DO NOT OPEN A PULL REQUEST!

my_github_user/my_repository/path/to/file.php:3
```php
    if ( MY_AWESOME_CONSTANT )
    // Constant: MY_AWESOME_CONSTANT
```

my_github_user/my_repository/path/to/file.php:42
```php
    $name = do_something_amazing() + 1;
    // Variable: $name
    // Function: do_something_amazing()
```


my_github_user/amo-2012/php-2.git/dbf2mysql/dbf2csv.cli.php:18

```php
        $info         = dbase_get_header_info($db);
       //$info  a variable 
       //$db  a variable
       // = an operator
```
my_github_user/amo-2012/php-2.git/dbf2mysql/dbf2csv.cli.php:30      
```php
        echo implode($delimetr, $line);
    // $delimeter - a variable 
    // implode() - a function
```
      
     
      
        
my_github_user/amo-2012/php-2.git dbf2mysql/dbf2mysql.cli.php 18:     
```

    if($argc >= 2) {

    $table = 'table';
    $iconvFrom = '866';
    $iconvTo = 'UTF-8';
    $delimetr = ',';
    
   // lines 5-10    
   //if variable called $argc has a value greater than or equal to 2, then display the data in a table, as 866 (?), im charset UTF-8, 
   //use a coma to separate the data within the table.
   // there are more this function does but is not ID'd here.
```

