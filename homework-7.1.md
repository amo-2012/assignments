# Homework 7.1 

// 1) github.com/amo-2012/WordPress/wp-content/themes/twentyten/functions.php:226 - 229
```
function twentyten_page_menu_args( $args ) {
    $args['show_home'] = true;
	return $args;
}

```

//function name: twentyten_page_menu_args
//arguments:     variable called $args
//in-scope variable: $args [ ' show_home ']
//return value: the value from the variable




// 2)  github.com/amo-2012/WordPress/wp-content/themes/twentyten/functions.php:241 - 243
```
function twentyten_excerpt_length( $length ) {
    return 40;
}
```

//function name:twentyten_excerpt_length
//arguments: variable called $length
//inscope variable:
//return value: limits the number of characters in the excerp to 40






// 3) github.com/amo-2012/WordPress/wp-content/themes/twentyten/functions.php:253 - 255
```            
function twentyten_continue_reading_link() {
        return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) . '</a>';
}
```

function name:twentyten_continue_reading_link
arguments: no arguments defined
inscope variable:
return value: a link (permalink)  and a string: 'Continue reading    &rarr   twentyten ' 







// 4) github.com/amo-2012/WordPress/wp-content/themes/twentytwelve/functions.php 373 - 400
```
function twentytwelve_body_class( $classes )
    {
    $background_color = get_background_color();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'twentytwelve-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';
g
	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
    }
```
    
//function name:twentytwelve_body_class
//arguments: $classes
//inscope variable:  background color   $background_color
//return value:  the css styles set up as classes.





