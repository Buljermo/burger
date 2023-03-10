<?php

  require_once HELPERS_DIR . 'DB.php';


  function lisaaPalaute($kirjoittaja,$text) {
    DB::run('INSERT INTO palaute (kirjoittaja, text) VALUE  (?,?);',[$kirjoittaja,$text]);
    return DB::lastInsertId();
  }

  
?>