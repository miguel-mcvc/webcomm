<?php

/* Go to My Apps dashboard: https://developers.mercadolibre.com.ar/apps/home, and get the information you need in order to the following enviroment variables */

/* Your Application Id */
$appId = getenv('3606372242098310');

/* Your Secret Key */
$secretKey = getenv('kfSp2qpShUWLagiVzSTQClGwGM20PHnT');

/* The Redirect url */
$redirectURI = getenv('https://webcomm.herokuapp.com');

/* The site id of the country where your application will work.
If you don't know your site_id go to our sites resources: https://api.mercadolibre.com/sites  */
$siteId = 'MLM';



//////////////////////////////////////////////////////////////////////////////////////////////////////
//If you don't use Heroku use the next config

// $appId = 'App_ID';

// $secretKey = 'Secret_Key';

// $redirectURI = 'Redirect_URI';

// $siteId = 'MLB';
