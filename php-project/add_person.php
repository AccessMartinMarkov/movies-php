<?php

require 'library/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['name'])) {
    $name = $_POST['name'];
  } else {
    $name = '';
  }
  if (isset($_POST['sex'])) {
    $sex = $_POST['sex'];
  } else {
    $sex = '';
  }
  if (isset($_POST['age'])) {
    $age = $_POST['age'];
  } else {
    $age = '';
  }

  $new_Person = array(
    'name' => $name,
    'sex' => $sex,
    'age' => $age
    );

  savePeople($new_Person);

  header('Location: index.php');

}

?>

<?php require 'layout/header.php' ?>

  <h1>Add Person Below!</h1>

  <form action="add_person.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br>
    <br>
    <label for="sex">Sex:</label>
    <input type="text" name="sex">
    <br>
    <br>
    <label for="age">Age:</label>
    <input type="text" name="age">
    <br>
    <br>
    <button type="submit">Add</button>
  </form>

<?php require 'layout/footer.php' ?>
