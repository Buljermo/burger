<?php

  require_once HELPERS_DIR . 'DB.php';


  function lisaaPalaute($kirjoittaja,$text) {
    $timestamp = date('Y-m-d H:i:s');
    DB::run('INSERT INTO palaute (kirjoittaja, text, timestamp) VALUE  (?,?,?);',[$kirjoittaja,$text, $timestamp]);
    return DB::lastInsertId();
  }

  
?>