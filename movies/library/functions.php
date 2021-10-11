<?php

function getMovies() {

  $config = require 'configuration/config.php';

  try {
    $dbh = new PDO($config['db_src'], $config['db_username'], $config['db_password']);
    $query = $dbh->query('SELECT * FROM movies');

    return $query->fetchAll();;

    $dbh = null;
  } catch (PDOException $e) {
    print "Errorr!: " . $e->getMessage() . "<br/>";
    die();
  }

}


