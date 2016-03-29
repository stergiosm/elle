<?php
function my_setup_theme() {
	
	register_sidebar( array(
		'name'          => __( 'testbar', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add more widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'after_setup_theme', 'my_setup_theme', 11 );