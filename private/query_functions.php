<?php

function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function insert_salamander($name, $habitat, $description) {
    global $db;
    $sql = "INSERT INTO salamander ";
    $sql .= "(name, habitat, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . $name . "',";
    $sql .= "'" . $habitat . "',";
    $sql .= "'" . $description . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // for insert statements, result is boolean
    if($result) {
        return true;
    } else {
      echo mysqli_error($db);
      db_disconnect($db);
      exit();
    }
}

function update_subject($salamander) {
    global $db;
  $sql = "UPDATE salamander SET ";
  $sql .= "name='" . $salamander['name'] . "', ";
  $sql .= "habitat='" . $salamander['habitat'] . "', ";
  $sql .= "description='" . $salamander['description'] . "' ";
  $sql .= "WHERE id='" . $salamander['id'] . "' "; 
  $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // for update statements the result is boolean
    if ($result) {
      //return true;
      redirect_to(url_for('/salamanders'));
    } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit();
    }
}

function find_salamander_by_id($id) {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "WHERE id ='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $salamander = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    // returns an assoc array
    return $salamander;
}