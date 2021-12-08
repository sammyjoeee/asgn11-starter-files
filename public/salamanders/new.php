<?php 
require_once('../../private/initialize.php');
$page_title = 'Create Salamander'; 
include(SHARED_PATH . '/salamanderHeader.php'); 
?>

  <a href="<?= url_for('index.php'); ?>">&laquo; Home</a>

    <h1>Create Salamander</h1>

    <form action="<?= url_for('salamanders/create.php'); ?>" method="post">
      <dl>
        <dt>Salamander Name</dt>
        <dd><input type="text" name="name" value="" /></dd>
      </dl>
      <dt>Habitat</dt>
        <dd><textarea name="habitat" rows="4" cols="75"></textarea></dd>
      </dl>
      <dt>Desciption</dt>
        <dd><textarea name="description" rows="4" cols="75"></textarea></dd>
      </dl>
        <input type="submit" value="Create Salamander" />
    </form>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
