<?php $this->layout('template', ['title' => 'Meidän ravintolat']) ?>

<h1>Meidän ravintolat</h1>

<div class='ravintolat'>
  <?php

  foreach ($ravintolat as $ravintola) {

    //$start = new DateTime($ravintola['tap_alkaa']);
    //$end = new DateTime($ravintola['tap_loppuu']);
  
    echo "<div>";
    echo "<div>$ravintola[nimi]</div>";
    echo "<div>$ravintola[osoite]</div>";
    echo "<div>$ravintola[aukioloajat]</div>";
    echo "<br>";
    echo "</div>";

  }

  ?>
</div>