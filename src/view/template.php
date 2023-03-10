<!DOCTYPE html>
<html lang="fi">

<head>
  <title>Turo's Burger - <?= $this->e($title) ?></title>
  <meta charset="UTF-8">
  <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1><a href="<?= BASEURL ?>">Turo's Burger<img src="<?=BASEURL."/images/home.png"?>" alt="Etusivu"></a></h1>
    <div><a href="<?=BASEURL."/burgerit"?>"><img src="<?=BASEURL."/images/logo.png"?>" alt="Etusivu"></a></div>
    <div><a href="<?=BASEURL."/juomat"?>"><img src="<?=BASEURL."/images/drink.png"?>" alt="Etusivu"></a></div>
  </header>
  <nav class="navigointi">
    <!-- <div><a href="<?=BASEURL?>"><img src="<?=BASEURL."/images/home.png"?>" alt="Etusivu"></a></div> -->
    <div><a href="<?=BASEURL?>">Etusivu</a></div>
    <div><a href="<?=BASEURL."/burgerit"?>">Burgerit</a></div>
    <div><a href="<?=BASEURL."/juomat"?>">Juomat</a></div>
    <div><a href="<?=BASEURL."/palaute"?>">Palaute</a></div>
    <div><a href="<?=BASEURL."/lisaa_palaute"?>">Lisää palaute</a></div>
    <div><a href="<?=BASEURL."/yhteystiedot"?>">Yhtestiedot</a></div>
  </nav>
  <section>
    <?= $this->section('content') ?>
  </section>
  <footer>
    <hr>
    <div>Turo's Burger by Kurpitsa</div>
  </footer>
</body>

</html>