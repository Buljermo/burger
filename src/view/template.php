<!DOCTYPE html>
<html lang="fi">

<head>
  <title>Turo's Burger - <?= $this->e($title) ?></title>
  <meta charset="UTF-8">
  <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1><a href="<?= BASEURL ?>">Turo's Burger</a></h1>
  </header>
  <nav>
    <!-- <div><a href="<?=BASEURL?>"><img src="<?=BASEURL."/images/home.png"?>" alt="Etusivu"></a></div> -->
    <div><a href="<?=BASEURL?>">Etusivu</a></div>
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