<?php
  // Suoritetaan projektin alustusskripti.
  require_once '../src/init.php';


  // Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
  // Siistimisen jälkeen osoite /~koodaaja/lanify/tapahtuma?id=1 on 
  // lyhentynyt muotoon /tapahtuma.
  $request = str_replace($config['urls']['baseUrl'],'',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

  // Luodaan uusi Plates-olio ja kytketään se sovelluksen sivupohjiin.
  $templates = new League\Plates\Engine(TEMPLATE_DIR);

  // Selvitetään mitä sivua on kutsuttu ja suoritetaan sivua vastaava
  // käsittelijä.
  if ($request === '/' || $request === '/ravintolat') {
    require_once MODEL_DIR . 'ravintola.php';
    $ravintolat = haeRavintolat();
    echo $templates->render('ravintolat',['ravintolat' => $ravintolat]);
  } else if ($request === '/ravintola') {
    require_once MODEL_DIR . 'ravintola.php';
    $ravintola = haeRavintola($_GET['id']);
    if ($ravintola) {
      echo $templates->render('ravintola',['ravintola' => $ravintola]);
    } else {
      echo $templates->render('ravintolanotfound');
    }
  } else {
    echo $templates->render('notfound');
  }


?> 
