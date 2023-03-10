<?php

  require_once HELPERS_DIR . 'DB.php';

  function haePalaute() {
    return DB::run('SELECT * FROM palaute;')->fetchAll();
  }
  
?>