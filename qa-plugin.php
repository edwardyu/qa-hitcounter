<?php

/*
	Plugin Name: Hit Counter
	Plugin URI: 
	Plugin Description: Counts the number of hits to your website.
	Plugin Version: 1.0
	Plugin Date: 2011-12-28
	Plugin Author: Edward Yu
	Plugin Author URI: https://github.com/edwardyu
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.4
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_module('widget', 'hitcounter.php', 'hitcounter', 'Hit Counter');
	

/*
	Omit PHP closing tag to help avoid accidental output
*/