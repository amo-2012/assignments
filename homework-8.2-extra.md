##  Homework 8 - extra credit
/**
research difference between
|| :  'or'
&& : 'and'

*/



//  These will be used as a boolean expression
    TRUE if  either or  is true
//  I've seen it used to validate a form:
```
  if (empty  ($_POST ("name") )  ||  empty ($_POST ("address") )  ||  empty ($_POST ("email") );
   {
     redirect
    } 
     
```
// So if the user left the name field 'OR'  address field OR  email field empty, they will be redirected to ...




//
// Conversely the php could be written with 'AND'  instead of or:
    TRUE if all are true
```
   if (!empty  ($_POST ("name") )  &&  empty ($_POST ("address") )   &&  empty ($_POST ("email") ) );
   {
     redirect_somewhere_else
    } 
    
```




Superglobal Arrays
Allow access to external data, such as URLs, HTML forms, cookies, sessions, and the Web server itself. Some examples:
    $_GET 
    $_POST
    $_REQUEST
    $_FILES
    $GLOBALS
    
    
They are always accessible, regardless of the scope — that is, you can access them from any function, 
  class or file without having to do anything special.
  
  
   10/24/12...amo
   