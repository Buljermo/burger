<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeJuomat() {
    return DB::run('SELECT * FROM juomat;')->fetchAll();
  }

?>