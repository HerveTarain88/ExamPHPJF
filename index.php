<?php

require "model/model.php";
require "controller/controllers.php";

//url que le visiteur doit taper :
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

/*ROUTING*/

if ( $uri === '/geneTicket/index.php') {
   get();
} elseif ($uri === '/geneTicket/index.php/createTicket') {
   createTicket();
} elseif($uri === '/geneTicket/index.php/delete' && isset($_GET['id'])) {
   deleteTicket($_GET['id']);
} else {
   header('HTTP/1.1 404 Not Found');
   echo '<html><body><h1>Page Not Found</h1></body></html>';
}

