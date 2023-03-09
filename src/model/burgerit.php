<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeBurgerit() {
    return DB::run('SELECT * FROM burgerit;')->fetchAll();
  }

?>