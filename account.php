<?php
include 'includes/header.php';
if (isset($_GET['source'])) {
  $source = $_GET['source'];
}else {
  $source = '';
}
  switch ($source) {
    case 'register':
    include 'includes/register.php';
    break;
    case 'resetaccount':
    include "includes/resetaccount.php";
    break;
    case 'profile':
    include "includes/profile.php";
    break;
      default:
      include 'includes/login.php';
      break;
  }
  ?>
