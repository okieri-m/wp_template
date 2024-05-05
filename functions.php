<?php

// CSSとJSの読み込み
function script_init() {
  
	//Font Awesomeの読み込み
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
	
	//CSSの読み込み
	wp_enqueue_style('my_style', get_theme_file_uri('/assets/css/style.css'), array(), '');
	
	//JavaScriptの読み込み
	wp_enqueue_script('my_script', get_theme_file_uri('/assets/js/main.js'), array(), '', true);
  }
  
  add_action('wp_enqueue_scripts', 'script_init');