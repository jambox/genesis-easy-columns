<?php
/**
 * Gnesis Columns Add WordPress Editor Buttons
 */
	
	//Check user permissions and add TinyMice Button
	function gc_add_button() {  
	   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
	   {  
		  	add_filter('mce_external_plugins', 'gc_add_plugin');  
			add_filter('mce_buttons', 'gc_register_button'); 
	   }  
	}  

	add_action('init', 'gc_add_button');  

	//Register TinyMce Buttons
	function gc_register_button($buttons) {  
	   array_push($buttons, "column", "one-half", "one-third", "one-fourth", "one-fifth", "one-sixth");  
	   return $buttons;  
	}  

	//Registers TinyMCE Plugins
	function gc_add_plugin($plugin_array) {  
	   $plugin_array['column'] = plugins_url('genesis-columns').'/includes/shortcodes.js';
	   $plugin_array['one-half'] = plugins_url('genesis-columns').'/includes/shortcodes.js'; 
	   $plugin_array['one-third'] = plugins_url('genesis-columns').'/includes/shortcodes.js'; 
	   $plugin_array['one-fourth'] = plugins_url('genesis-columns').'/includes/shortcodes.js'; 
	   $plugin_array['one-fifth'] = plugins_url('genesis-columns').'/includes/shortcodes.js'; 
	   $plugin_array['one-sixth'] = plugins_url('genesis-columns').'/includes/shortcodes.js'; 
	   return $plugin_array;  
	}  