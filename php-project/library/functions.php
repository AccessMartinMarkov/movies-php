<?php

  function getPeople() {
    $fileJson = file_get_contents('dataJSON/data.json');
    $data = json_decode($fileJson, true);

    return $data;
  }

  function savePeople(array $person_to_save) {
    $people = getPeople();
    $people[] = $person_to_save;
    $json = json_encode($people, JSON_PRETTY_PRINT);

    return file_put_contents('dataJSON/data.json', $json);
  }

