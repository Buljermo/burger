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
  switch ($request) {
    case '/':
    case '/ravintolat':
      require_once MODEL_DIR . 'ravintola.php';
      $ravintolat = haeRavintolat();
      echo $templates->render('ravintolat',['ravintolat' => $ravintolat]);
      break;
    case '/ravintola':
      require_once MODEL_DIR . 'ravintola.php';
      $ravintola = haeRavintola($_GET['id']);
      if ($ravintola) {
        echo $templates->render('ravintola',['ravintola' => $ravintola]);
      } else {
        echo $templates->render('ravintolanotfound');
      }
      break;
      case '/burgerit':
        require_once MODEL_DIR . 'burgerit.php';
        $burgerit = haeBurgerit();
        echo $templates->render('burgerit',['burgerit' => $burgerit]);
        break;
    // case '/lisaa_tili':
    //   echo $templates->render('lisaa_tili');
    //   break;
    default:
      echo $templates->render('notfound');
  }    



?> 
