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

  function traiteLogin(){
    global $db;
    $db->query('SET NAMES utf8');   
    $requete="SELECT * FROM admin WHERE login=:login";
    $stmt=$db->prepare($requete);
    $stmt->bindParam(':login',$_GET["login"], PDO::PARAM_STR);
    $stmt->execute();   
    if ($stmt->rowcount()==1){
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_GET["pwd"],$result["password"])){
            $_SESSION["login"]=$_GET["login"];
            $_SESSION["id"] = $result["id_admin"];
            return 1;
        } else {return 2;}
    } else {return 3;}
}

function getTeachers(){
  global $db;
  $requete = $db->prepare('SELECT * FROM teachers ORDER BY name_teacher ASC');
  $requete -> execute();       
  $data = $requete -> fetchALL(PDO::FETCH_OBJ);
  return $data;
}

function getProjects(){
  global $db;
  $requete = $db->prepare('SELECT * FROM projects ORDER BY date_project DESC');
  $requete -> execute();       
  $data = $requete -> fetchALL(PDO::FETCH_OBJ);
  return $data;
}

function getNews(){
  global $db;
  $requete = $db->prepare('SELECT * FROM news ORDER BY date_news DESC');
  $requete -> execute();       
  $data = $requete -> fetchALL(PDO::FETCH_OBJ);
  return $data;
}

function insertNews($title, $content, $image, $desc_image, $date_envoie){
  global $db;
  $requete= "INSERT INTO news (title_news, photo_news, content_news, date_news,alt_news) VALUES (:title_news, :photo_news, :content_news, :date_news, :alt_news)";
  $stmt= $db->prepare($requete);
  $stmt->bindParam(':title_news', $title, PDO::PARAM_STR); 
  $stmt->bindParam(':photo_news', $image, PDO::PARAM_LOB); 
  $stmt->bindParam(':content_news', $content, PDO::PARAM_STR); 
  $stmt->bindParam(':date_news', $date_envoie, PDO::PARAM_STR); 
  $stmt->bindParam(':alt_news', $desc_image, PDO::PARAM_STR); 
  $stmt->execute();
  header('Location: admin-gestion.php');   
}

function deleteNews($id){
  global $db;
  $requete= "DELETE FROM news WHERE id_news = ?";
  $stmt= $db->prepare($requete);
  $stmt->bindParam(1, $id, PDO::PARAM_INT); 
  $stmt->execute();
}
?>