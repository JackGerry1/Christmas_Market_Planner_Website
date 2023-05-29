<?php

// Include the config file
@include 'templates/config.php';

// Start the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header('location:login.php');

?>