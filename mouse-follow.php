<?php
/**
 * Plugin Name: Mouse Follow
 * Description: Mouse Follow creates an elegantly designed pointer for your website.
 * Plugin URI: https://bibiai.es/herramientas/mouse-follow
 * Author: Bibiai
 * Author URI: https://bibiai.es/
 * Version: 1.0.0
 */

    /*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program. If not, see https://www.gnu.org/licenses/.
    */

function buomf_cursor_tracking() {
  wp_enqueue_style( 'buomf-css', plugin_dir_url( __FILE__ ) . 'css/style.css' );
  wp_enqueue_script( 'simplex-noise', plugin_dir_url( __FILE__ ) . 'js/simplex-noise.min.js');
  wp_enqueue_script( 'paper-js', plugin_dir_url( __FILE__ ) . 'js/paper-full.min.js');
  wp_enqueue_script( 'mouse-follow', plugin_dir_url( __FILE__ ) . 'js/mouse-follow.js', array(), '1.0.0', true );
}
add_action( 'wp_head', 'buomf_cursor_tracking' );

function buomf_add_cursor_frontend() {
    echo '<div class="buomf--cursor buomf--cursor--small"></div><canvas class="buomf--cursor buomf--cursor--canvas" resize></canvas>';
}
add_action( 'wp_footer', 'buomf_add_cursor_frontend' );
