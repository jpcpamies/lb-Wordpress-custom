<?php 
add_theme_support('post-thumbnails');




// Widget 'IDEAL PARA'
function miplugin_register_sidebar() {
	register_sidebar( 
		array (
			'id' => 'ideal-para', 
			'name' => 'Sección Ideal para',
			'description' => 'Sección donde colocar el target del curso y algunos detalles.',
			'before_widget' => '<div class="Ideal-para__outer">',
			'after_widget' => '</div>',
		)	
	);
}
add_action( 'widgets_init', 'miplugin_register_sidebar' );

// Widget 'IDEAL PARA'
function miplugin_register_sidebar2() {
	register_sidebar( 
		array (
			'id' => 'aprenderas', 
			'name' => 'Sección Aprenderás',
			'description' => 'Sección con la lista de lo que aprenderás.',
			'before_widget' => '<div class="Ideal-para__outer">',
			'after_widget' => '</div>',
		)	
	);
}
add_action( 'widgets_init', 'miplugin_register_sidebar2' );

// Widget 'DETALLE'
function miplugin_register_sidebar3() {
	register_sidebar( 
		array (
			'id' => 'detalle', 
			'name' => 'Sección Detalle',
			'description' => 'Sección con los detalles del curso.',
			'before_widget' => '<div class="Ideal-para__outer">',
			'after_widget' => '</div>',
		)	
	);
}
add_action( 'widgets_init', 'miplugin_register_sidebar3' );

// Widget 'SUSCRIBE'
function miplugin_register_sidebar4() {
	register_sidebar( 
		array (
			'id' => 'suscribe', 
			'name' => 'Suscripción al Newslleter',
			'description' => 'Suscripción al Newslleter.',
			'before_widget' => '<div class="Ideal-para__outer">',
			'after_widget' => '</div>',
		)	
	);
}
add_action( 'widgets_init', 'miplugin_register_sidebar4' );

