<?php 
session_start();
session_start();

// Delete certain session
unset($_SESSION['userid']);
// Delete all session variables


// Jump to login page

header('location:../lock_screen.php');
