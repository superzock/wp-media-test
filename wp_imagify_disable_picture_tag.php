<?php
/*
Plugin Name: Disable Picture tag for WP Imagify 
Plugin URI:  https://imagify.io
Description: The plugin disables picture tag for WP imagify.
Version:     1.0
Author:      Anand Agarwal
Author URI:  https://imagify.io
License:     GPL2 etc
License URI: #

Copyright YEAR PLUGIN_AUTHOR_NAME (email : anand.agrawal23@gmail.com)
(Disable Picture tag for WP Imagify) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Disable Picture tag for WP Imagify) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Disable Picture tag for WP Imagify). If not, see (#).
*/

defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );

class wp_imagify_disable_picture_tag{


    public function __construct(){

        add_filter('imagify_allow_picture_tags_for_webp', array($this,'imagify_disable_picture_anand'));
        register_activation_hook(__FILE__, array($this,'plugin_activate')); //activate hook

    }

    
    /**
     * Do not use <picture> tags in AMP pages.
     *
     * @since  1.9
     * @author Grégory Viguier
     *
     * @param  bool $allow True to allow the use of <picture> tags (default). False to prevent their use.
     * @return bool
     */
    public function imagify_disable_picture_anand( $allow ) {
          $allow = '';
          return $allow;
       
    };

}

//triggered on activation of the plugin (called only once)
public function plugin_activate(){  
    $this->imagify_disable_picture_anand();
    
}
