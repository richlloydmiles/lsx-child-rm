<?php
$includes_path = get_stylesheet_directory() . '/includes/';
include( $includes_path . 'bst-config.php' );
include( $includes_path . 'bst-layout.php' );

// Image Sizes
add_image_size( 'project-featured', 600, 480, true );
add_image_size( 'project-thumb', 320 , 213, true );


// We'll use this form if we're going to just outright replace something
function my_function_name($options) {
  // Your custom code goes here, between the curly braces
  // 
  // 
  // 
  // 
// =======================================================================================  
// ========================= Example of replacing a heading tab ==========================
// =======================================================================================  
// $new_heading = array( 
// 	'name' => 'New Tab',
// 	'type' => 'heading');
// 	
// 		foreach ($options as $key => $item) {
// 		if ($item['name'] == 'Contact'){
// 			$options[$key]['name'] = 'Contact us';
// 		 }
//	}	
// 
// =======================================================================================  
// ========================= Example of adding an option tab =============================
// =======================================================================================  
$new_option = array(
		'name' => __('new option', 'lsx'),		
		'id' => 'contact_name',
		'type' => 'text');
	
	foreach ($options as $key => $item) {
   		if ($item['id'] == 'contact_name'){
			$options[$key] = $new_option;
  		 }
   }
// =======================================================================================  
// =======================================================================================  


return $options;
}

// add_filter('lsx_options_filter','my_function_name' );	



