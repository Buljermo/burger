<?php $this->layout('template', ['title' => 'burgerit']) ?>

<h1>Burgerit:</h1>

<div class='burgerit'>
<?php

foreach ($burgerit as $burgerit) {

  //$start = new DateTime($tapahtuma['tap_alkaa']);
  //$end = new DateTime($tapahtuma['tap_loppuu']);

  echo "<div>";
    echo "<b><div>$burgerit[nimi]:</div></b>";
    echo "<div>$burgerit[kuvaus].</div>";
    echo "<div>Hinta on $burgerit[hinta] £.</div>";
    echo "<hr>";
    // echo "<div>" . $start->format('j.n.Y') . "-" . $end->format('j.n.Y') . "</div>";
  echo "</div>";

}

?>
</div>
