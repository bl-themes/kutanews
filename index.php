<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include(THEME_DIR_PHP.'head.php'); ?>
  </head>
  <body class="bg-dark">
  	<?php Theme::plugins('siteBodyBegin'); ?>
    <?php include(THEME_DIR_PHP.'topbar.php'); ?>
    <?php
    if ($WHERE_AM_I == 'page') {
      include(THEME_DIR_PHP.'page.php');
      } else {
      include(THEME_DIR_PHP.'home.php');
    }
    ?>  
    <?php include(THEME_DIR_PHP.'footer.php'); ?>
    <?php Theme::plugins('siteBodyEnd'); ?>
  </body>
</html>
