<?php $this->layout('template', ['title' => 'palaute']) ?>

<h1>Palaute</h1>

<div class='palaute'>
<?php

foreach ($palaute as $palaute) {

  //$start = new DateTime($tapahtuma['tap_alkaa']);
  //$end = new DateTime($tapahtuma['tap_loppuu']);

  echo "<div>";
    echo "<b><div>$palaute[kirjoittaja]:</div></b>";
    echo "<div>$palaute[text].</div>";
    //echo "<div>Hinta on $palaute[hinta] £.</div>";
    //echo "<hr>";
    // echo "<div>" . $start->format('j.n.Y') . "-" . $end->format('j.n.Y') . "</div>";
  echo "</div>";

}

?>
</div>


