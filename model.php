<?php
  // $host_name = 'db5011423053.hosting-data.io'  ;
  // $database = 'dbs9638858';
  // $user_name = 'dbu2941595';
  // $password = 'ionostablmmichamps77420';

  // $link = new mysqli($host_name, $user_name, $password, $database);

  // if ($link->connect_error) {
  //   die('<p>La connexion au serveur MySQL a échoué: '. $link->connect_error .'</p>');
  // } else {
  //   echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
  // }

  $db =new PDO("mysql:host=localhost;dbname=dbs9638858;port=3306;charset=utf8",'root','');
  $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  function getProjets(){
    global $db;
    $requete = $db->prepare('SELECT id_project,name_project, photo_project, ext_icon FROM projects ORDER BY date_project DESC');
    $requete -> execute();       
    $data= $requete -> fetchALL(PDO::FETCH_OBJ);
    return $data;
}; 

  function getProjet($id){
    global $db;
    $requete = $db -> prepare('SELECT * FROM projects WHERE id_project = ?');
    $requete -> execute(array($id));
    if($requete -> rowCount() == 1){
        $data = $requete -> fetch(PDO :: FETCH_OBJ);
        return $data;
    }
    else {
        header('Location: index.php');
    }
  }
?>