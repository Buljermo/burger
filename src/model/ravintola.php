<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeRavintolat() {
    return DB::run('SELECT * FROM ravintola;')->fetchAll();
  }

?>
