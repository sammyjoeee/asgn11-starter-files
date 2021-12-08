<?php require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = update_subject($salamander);

} else {
  $salamander = find_salamander_by_id($id);
}

$page_title = 'Edit Salamander'; 
include(SHARED_PATH . '/salamanderHeader.php'); 

?>

  <a href="<?= url_for('index.php'); ?>">&laquo; Home</a>

    <h1>Edit Salamander</h1>

    <form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value="<?= h($salamander['name']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Habitat</dt>
        <dd><textarea rows="4" cols="75" name="habitat"><?= h($salamander['habitat']); ?></textarea></dd>
      </dl>
      <dl>
        <dt>Desciption</dt>
        <dd><textarea name="description" rows="4" cols="75"><?= h($salamander['description']); ?></textarea></dd>
      </dl>
      
        <input type="submit" value="Edit Salamander" />
    </form>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
