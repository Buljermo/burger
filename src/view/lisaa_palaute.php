<?php $this->layout('template', ['title' => 'Lisaa palaute']) ?>

<h1>Lisää palaute</h1>

<form class="palaute-form" action="" method="POST">
  <div>
    <label for="kirjoittaja">Nimi:</label>
    <input required id="kirjoittaja" type="text" name="kirjoittaja">
  </div>
  <div>
    <label for="text"> Palaute:</label>
    <input required id="text" type="text" name="text">
  </div>
  <div>
    <input type="submit" name="laheta" value="Lähetä palaute">
  </div>
</form>
