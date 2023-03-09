<?php $this->layout('template', ['title' => $ravintola['nimi']]) ?>

<?php
  //$start = new DateTime($tapahtuma['tap_alkaa']);
  //$end = new DateTime($tapahtuma['tap_loppuu']);
?>

<h1><?=$ravintola['nimi']?></h1>
<div>Meidän osoite on <?=$ravintola['osoite']?>.</div>
<div>Ravintola auki <?=$ravintola['aukioloajat']?>. Tervetuloa!</div>
