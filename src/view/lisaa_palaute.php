<?php $this->layout('template', ['title' => 'Uuden tilin luonti']) ?>

<h1>Lisää palaute</h1>

<form action="" method="POST">
  <div>
    <label for="kirjoittaja">Nimi:</label>
    <input id="kirjoittaja" type="text" name="kirjoittaja">
  </div>
  <div>
    <label for="text">Palaute:</label>
    <input id="text" type="text" name="text">
  </div>
  <div>
    <input type="submit" name="laheta" value="Lähetä palaute">
  </div>
</form>
