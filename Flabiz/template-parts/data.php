<?php
// Template Name : data
?>
<?php 
$user_name = $_POST['user_name'];
$save_password = $_POST['save_password'];

// validate form data
if (empty($user_name) || empty($save_password)) {
  echo 'Please fill in all fields.';
} else {
  // process form data
  // ...
  echo 'Success!';
}
?>