## Homework 5.1: Starting to understand more complex French

* Login to Github and approve my pull request to get the file `homework-5.1.md` in your `assignments` repository.
* Log into Cloud9 and use `git pull` to get the file into your workspace.
 
* Find [the Wordpress project on Github][wordpress], fork it into your own account, and clone it into a Cloud9 workspace.
* Open your Wordpress workspace and find a file that has some branching _if-then-else_ logic; look for some juicy conditionals and guard clauses.
* Copy-paste your examples into `homework-5.1.md` (this file) and attempt to identify the conditions with comments like so:
> USERNAME/Wordpress/path/to/file.php:00
> ```php
>   if ( $mom_says == 'yes' ) // if mom says yes
> ```

* Save your file locally, add and commit it with git, and push your changes to your Github account.
* **Bonus points**: open a pull request back to the original repo with your work to date.

[wordpress]:https://github.com/Wordpress/Wordpress/
//
//
```
// https://github.com/amo-2012/WordPress.git    wp-activate.php     FILE NAME
//// Check site status
```php
if ( is_multisite() ) {
    if ( true !== ( $file = ms_site_check() ) ) {
		require( $file );
		die();
	}
	unset($file);
}
```
// this is to see if the site is open
//



//https://github.com/amo-2012/WordPress.git       wp-blog-header.php    FILE NAME
//
//
```php
if ( !isset($wp_did_header) ) {

    $wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );

	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
```

// In this guard class, it checks if header is open. If so then open the template
//
//

//   https://github.com/amo-2012/WordPress.git   wp-login.php       FILE NAME
//
```php
if ( force_ssl_admin() && ! is_ssl() ) {
    if ( 0 === strpos($_SERVER['REQUEST_URI'], 'http') ) {
		wp_redirect( set_url_scheme( $_SERVER['REQUEST_URI'], 'https' ) );
		exit();
	} else {
		wp_redirect( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
		exit();
	}
}
```
// tests if SSL required for user to log in
