# Homework-8.1.md  Research testing

//
1)  Unit Testing
takes the smallest piece of testable software in the application, isolate it from the remainder of the code, and determine whether it behaves exactly as you expect

PRO: 
   Unit testing has proven its value in that a large percentage of defects are identified during its use.
   
CON:
    it will not catch integration errors 
    Unit tests can never prove the correctness of code!!
    
    
In favor of unit testing:
   J. Timothy King's Blog
  http://blog.jtimothyking.com/2006/07/11/twelve-benefits-of-writing-unit-tests-first
  
  
  
Against:
   http://www.develop.com/testingpitfalls
      In Summary:
        Pitfall #1: Tests are hard to maintain.
        Pitfall #2: Tests are lot of work to write.
        Pitfall #3: Adding a new feature breaks a lot of tests that I then need to adjust
        Pitfall #4: When I change something a whole bunch of tests break even though I haven't broken the system.
        Pitfall #5: There are just too many possibilities to test
        
        
//
//
//


        
2) Integration testing
    Combining modules and testing them as a whole.
    
CON: 
     'What are the pros and cons of automated Unit Tests vs automated Integration tests?'
    http://stackoverflow.com/questions/771011/what-are-the-pros-and-cons-of-automated-unit-tests-vs-automated-integration-test
        "Integration Tests will only give the confirmation at the end if the whole change was successful 
        (and the answer will be "no" for a long time). The Integration Tests will not give you any help during the refactoring itself, 
        which will make it harder and possibly frustrating. You need Unit Tests for that."
    
    
    
 PRO  (and con):
    about buttom up integration testing:
    http://www.authorstream.com/Presentation/viki001-809163-integration-testing/
        "Pros and Cons of bottom up integration testing: Pros and Cons of bottom up 
        integration testing Bad for functionally decomposed systems: Tests the most 
        important subsystem (UI) last Useful for integrating the following systems 
        Object-oriented systems real-time systems systems with strict performance requirements"
    
    
    
////
////

    
UNIT TESTING FRAMEWORKS FOR PHP:

1.  PhpUnit
     http://phpunit.sourceforge.net/

2.  Test::Simple for PHP
     http://shiflett.org/blog/2006/jan/test-simple-for-php

3. PHPUnit
    https://github.com/sebastianbergmann/phpunit/


4.  Testify.php
    http://tutorialzine.com/projects/testify/

5.  PhpInlineTest is script to run inline tests for PHP functions and class methods
    https://github.com/ptrofimov/phpinlinetest



 * *  http://codeception.com/
   *  (a little extra for my reference)
   *  
   *  
  

    