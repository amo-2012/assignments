g## Homework 6.1: Follow the Arrows!

* Use your upstream remote to pull homework-6.1.md into your workspace on Cloud9 (hint: git pull upstream master).
 
* Find a section in your projects that has some decent looping and branching code: at least five branches that you can diagram.
* Copy-paste your example into homework-6.1.md and attempt to identify the loop conditions with comments e.g. 

```php
while ( $count < $max ) {
// while $count is less than $max

foreach ( $collection as $item ) {
// until there are no more $items in the $collection"
```

* Save your file locally, git add and git commit it (don't forget: -m 'explain why!'), and git push your changes to your Github account.
* **Bonus points:** open a pull request back to the original repo.
                  


```php
amo-2012/Wordpress/wp-login.php:117
        foreach ( $wp_error->get_error_codes() as $code ) {
// foreach  when error has code


amo-2012/Wordpress/wp-login.php:119
foreach ( $wp_error->get_error_messages($code) as $error ) {
// for each error, get error message


amo-2012/Wordpress/wp-mail.php:52
for ( $i = 1; $i <= $count; $i++ ) {
// when the count is greater than $i


amo-2012/Wordpress/wp-mail:65
foreach ($message as $line) {
// for each message as line


amo-2012/Wordpress/wp-cron.php:75
foreach ( $crons as $timestamp => $cronhooks ) {
// for each cron set as timestamp