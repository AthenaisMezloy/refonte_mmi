<?php
  $host_name = 'db5011423053.hosting-data.io'  ;
  $database = 'dbs9638858';
  $user_name = 'dbu2941595';
  $password = 'ionostablmmichamps77420';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>La connexion au serveur MySQL a échoué: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
  }
?>