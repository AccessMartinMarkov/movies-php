<?php

  $pdo = new PDO('mysql:dbname=people;host=localhost;', 'root', null);
  $query = $pdo->query('SELECT * FROM people');
  $people = $query->fetchAll();


//  var_dump($people);die();

  require 'library/functions.php';
//  $people = getPeople();


?>

  <?php require 'layout/header.php' ?>

  <h1>We Have <?php echo count($people) ?> players here!</h1>

  <?php foreach ($people as $person) { ?>
    <h3>Person name: <?php echo $person['name'] ?></h3>
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

