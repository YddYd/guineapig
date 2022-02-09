<?php

error_reporting(E_ERROR | E_PARSE); 
// Autoload Classes 
spl_autoload_register(function($class_name){
    include '../classes/'.$class_name . '.php';
});

// Start Session
session_start();

// Store some info about our app name 
// to be retrieved by the view
App::set('SiteName', 'Guinea Pig');

// Start Routing User Requests
Router::start();

?>