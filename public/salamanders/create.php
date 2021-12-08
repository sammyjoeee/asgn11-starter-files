<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php
  $id = $_POST['id'] ?? '';
  $name = $_POST['name'] ?? '';
  $habitat = $_POST['habitat'] ?? '';
  $description = $_POST['description'] ?? '';
  
  $result = insert_salamander($name, $habitat, $description);
  $newID = mysqli_insert_id($db);
  redirect_to(url_for('salamanders/show.php?id=' .$newID));
 
} else {
  redirect_to(url_for('salamanders/new.php'));
}

?>
