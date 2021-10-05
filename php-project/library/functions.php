<?php

  function getPeople($limit = null) {
    $config = require 'library/config.php';

    $pdo = new PDO($config['db_src'], $config['db_username'], $config['db_password']);
    if($limit) {
      $query = $pdo->query('SELECT * FROM people LIMIT '.$limit);
    } else {
      $query = $pdo->query('SELECT * FROM people');
    }
    $people = $query->fetchAll();

    return $people;
  }

  function savePeople(array $person_to_save) {
    $people = getPeople();
    $people[] = $person_to_save;
    $json = json_encode($people, JSON_PRETTY_PRINT);

    return file_put_contents('dataJSON/data.json', $json);
  }

