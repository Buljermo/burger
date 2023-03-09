<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Turo's Burger - <?=$this->e($title)?></title>
    <meta charset="UTF-8">    
  </head>
  <body>
  <header>
      <h1><a href="<?=BASEURL?>">Turo's Burger</a></h1>
    </header>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>Turo's Burger by Kurpitsa</div>
    </footer>
  </body>
</html>
