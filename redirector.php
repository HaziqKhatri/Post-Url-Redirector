<?php
/*
Plugin Name: Post-Url-Redirect
Description: Redirect any page to an internal or external URL
Version: 1.0.0
Author:Haziq Khatri
Author URL: https://www.linkedin.com/in/haziq-khatri-bb586b192/
*/



/**
 * Security, checks if WordPress is running
 **/
if ( !function_exists( 'add_action' ) ) :
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
endif;



/**
 * Kickstart
 */
if ( is_admin() )
	require_once( 'classes/class.redirector.admin.php' );
else
	require_once( 'classes/class.redirector.php' );
