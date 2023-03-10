<?php $this->layout('template', ['title' => 'burgerit']) ?>

<h1>Juomat:</h1>

<div class='burgerit'>
<?php

foreach ($juomat as $juomat) {

  //$start = new DateTime($tapahtuma['tap_alkaa']);
  //$end = new DateTime($tapahtuma['tap_loppuu']);

  echo "<div class='message'>";
    echo "<b><div>$juomat[nimi]:</div></b>";
    echo "<div>$juomat[kuvaus].</div>";
    echo "<div>Hinta on $juomat[hinta] £.</div>";
    echo "<hr>";
    // echo "<div>" . $start->format('j.n.Y') . "-" . $end->format('j.n.Y') . "</div>";
  echo "</div>";

}

?>
</div>
