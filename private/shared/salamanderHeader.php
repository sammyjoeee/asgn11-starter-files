<?php
  if(!isset($page_title)) { $page_title = 'Salamanders'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>SAS - <?= h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/salamanders.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Southern Appalachian Salamanders</h1>
    </header>

    <!-- <navigation>
      <ul>
        <li><a href="<?= url_for('/index.php'); ?>">Menu</a></li>
      </ul>
    </navigation> -->
