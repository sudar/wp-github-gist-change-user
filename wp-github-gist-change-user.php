<?php
/*
Plugin Name: WP Github Gist - Change user
Plugin URI: http://sudarmuthu.com/wordpress/wp-github-gist
Description: Change the user name of gists embeded using wp-github-gist plugin
Author: Sudar
Version: 0.1
Donate Link: http://sudarmuthu.com/if-you-wanna-thank-me
License: GPL
Author URI: http://sudarmuthu.com/
Text Domain: wp-github-gist
*/

/*  Copyright 2010  Sudar Muthu  (email : sudar@sudarmuthu.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Change the user name of gists embeded using wp-github-gist plugin
 *
 * @since 0.1
 */
function wp_github_gist_change_user( $user, $id ) {
    return 'sudar';
}

add_filter( 'wp-github-gist-user', 'wp_github_gist_change_user', 10, 2 );
?>
