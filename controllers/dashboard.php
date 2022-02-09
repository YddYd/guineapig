<?php

// change the page title for use in the template.
// Load the dashboard view

if (App::User()->DateOfBirth == null || App::User()->Color == null || App::User()->Email == null || App::User()->Eats == null){
  App::notice('Wanna complete your profile? <a href="/profile">Complete your profile</a>.');
}


// show the latest meows on the dashboard.
// $meows = Meow::findMany();
 


App::set("PageTitle", "Dashboard"); 
include '../views/dashboard.php';

?>