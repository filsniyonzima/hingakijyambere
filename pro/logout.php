<?php
// logout.php

// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the desired page
header('Location: njiafarmer.php');
exit;
?>