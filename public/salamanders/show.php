<?php 
require_once('../../private/initialize.php');

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamanderHeader.php'); 

$salamander = find_salamander_by_id($id);
?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

<dl>
    <dt>ID</dt>
    <dd><?= $salamander['id']; ?></dd>
</dl>
<dl>
    <dt>Name</dt>
    <dd><?= $salamander['name']; ?></dd>
</dl>
<dl>
    <dt>Habitat</dt>
    <dd><?= $salamander['habitat']; ?></dd>
</dl>
<dl>
    <dt>Desciption</dt>
    <dd><?= $salamander['description']; ?></dd>
</dl>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
