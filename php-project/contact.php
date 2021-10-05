<?php

  require 'library/functions.php';
  $people_count = count(getPeople());


?>

<?php require 'layout/header.php' ?>

<h1>This is Contact Us Page for <?php echo $people_count ?> People</h1>

<?php require 'layout/footer.php' ?>