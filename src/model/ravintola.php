<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeRavintolat() {
    return DB::run('SELECT * FROM ravintola;')->fetchAll();
  }

  function haeRavintola($id) {
    return DB::run('SELECT * FROM ravintola WHERE idravintola = ?;',[$id])->fetch();
  }


?>
