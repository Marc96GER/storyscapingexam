<?php
/**
 * Plugin name: Popin
 * Description: A test plugin
 * Plugin URI: http://localhost
 * Version 1.0
 * Auther: Magnus Olesen
 * Auther http://localhost
 * License: GPL2
 */

 function examplefunction(){
     $mycode = '<h2>Plugin</h2>';
     $mycode .= '<p>Click here you monkey azzz</p>';
     $mycode .= '
     <section id="mygame">
     <script src="https://cdn.htmlgames.com/embed.js?game=BerlinHiddenObjects&amp;bgcolor=white"></script>
     </section>
     ';
     return $mycode;
 }



 function register_styles_plugin(){
    
    wp_enqueue_style('CustomStylesheet',plugins_url('plugin-popin/css/style.css'));
    
    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.1.1.min.js',array(),null,true);
    
    wp_enqueue_script('CustomScript',plugins_url('plugin-popin/js/script.js'),array('jquery'),null,true);
}

add_shortcode('plugin-popin','examplefunction');
add_action('wp_enqueue_scripts','register_styles_plugin');




?>