<?php $this->layout('template', ['title' => 'Meidän ravintolat']) ?>

<h1>Meidän ravintolat:</h1>

<div class='ravintolat'>
  <?php

  foreach ($ravintolat as $ravintola) {

    //$start = new DateTime($ravintola['tap_alkaa']);
    //$end = new DateTime($ravintola['tap_loppuu']);
  
    echo "<div class='message'>";    
    echo "<div>$ravintola[nimi]</div>";
    echo "<div>$ravintola[osoite]</div>";
    //echo "<div>$ravintola[aukioloajat]</div>";
    echo "<div><a href='ravintola?id=" . $ravintola['idravintola'] . "'>LISÄTIEDOT</a></div>";
    echo "</div>";

  }

  ?>
</div>