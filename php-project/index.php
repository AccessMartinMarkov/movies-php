<?php

  require 'library/functions.php';
  $people = getPeople(2);
  $people_count = count($people);
//  var_dump($people);die();
?>

  <?php require 'layout/header.php' ?>

  <h1>We Have <?php echo $people_count; ?> players here!</h1>

  <?php foreach ($people as $person) { ?>
    <h3>Person name: <?php echo $person['name'] ?></h3>
    <div style="width: 150px"><img style="width: 100%;" src="<?php echo $person['image'] ?>" alt=""></div>
    <h5>Person age: 
      <?php 
        if (!key_exists('age', $person)) {
          echo 'Unknown';
        } else {
          echo $person['age'];
        }
      ?>
    </h5>
    <h5>Person sex: <?php echo $person['sex'] ?></h5>
  <?php } ?>

  <?php require 'layout/footer.php' ?>

