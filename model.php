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
};


function getTeachers(){
  global $db;
  $requete = $db->prepare('SELECT * FROM teachers ORDER BY name_teacher ASC');
  $requete -> execute();       
  $data = $requete -> fetchALL(PDO::FETCH_OBJ);
  return $data;
};

function insertTeacher($name, $image, $subject){
  global $db;
  $requete= "INSERT INTO teachers (name_teacher, photo_teacher, subject_teacher) VALUES (:name_teacher, :photo_teacher, :subject_teacher)";
  $stmt= $db->prepare($requete);
  $stmt->bindParam(':name_teacher', $name, PDO::PARAM_STR); 
  $stmt->bindParam(':photo_teacher', $image, PDO::PARAM_LOB); 
  $stmt->bindParam(':subject_teacher', $subject, PDO::PARAM_STR); 
  $stmt->execute();
  header('Location: admin-gestion.php');   
};

function deleteTeacher($id){
  global $db;
  $requete= "DELETE FROM teachers WHERE id_teacher = ?";
  $stmt= $db->prepare($requete);
  $stmt->bindParam(1, $id, PDO::PARAM_INT); 
  $stmt->execute();
};

  function getProjects(){
    global $db;
    $requete = $db->prepare('SELECT * FROM projects JOIN icons ON projects.ext_icon = icons.id_icon ORDER BY date_project DESC');
    $requete -> execute();       
    $data= $requete -> fetchALL(PDO::FETCH_OBJ);
    return $data;
}; 

  function getProject($id){
    global $db;
    $requete = $db->prepare('SELECT * FROM projects JOIN icons ON projects.ext_icon = icons.id_icon WHERE id_project = ? ');
    $requete -> execute(array($id));
    if($requete -> rowCount() == 1){
        $data = $requete -> fetch(PDO :: FETCH_OBJ);
        return $data;
    }
    else {
        header('Location: index.php');
    }
  };

  function insertProject($title, $author, $content, $quote, $image, $desc_image, $date_envoie, $ext_icon){
    global $db;
    $requete= "INSERT INTO projects (name_project, name_author, description_project, quote_project, photo_project, date_project, ext_icon, alt_project) VALUES (:name_project, :name_author, :description_project, :quote_project, :photo_project, :date_project, :ext_icon, :alt_project)";
    $stmt= $db->prepare($requete);
    $stmt->bindParam(':name_project', $title, PDO::PARAM_STR); 
    $stmt->bindParam(':name_author', $author, PDO::PARAM_STR); 
    $stmt->bindParam(':description_project', $content, PDO::PARAM_STR); 
    $stmt->bindParam(':quote_project', $quote, PDO::PARAM_STR); 
    $stmt->bindParam(':photo_project', $image, PDO::PARAM_LOB); 
    $stmt->bindParam(':date_project', $date_envoie, PDO::PARAM_STR); 
    $stmt->bindParam(':ext_icon', $ext_icon, PDO::PARAM_INT); 
    $stmt->bindParam(':alt_project', $desc_image, PDO::PARAM_STR); 
    $stmt->execute();
    header('Location: admin-gestion.php');   
  };

  function deleteProject($id){
    global $db;
    $requete= "DELETE FROM projects WHERE id_project = ?";
    $stmt= $db->prepare($requete);
    $stmt->bindParam(1, $id, PDO::PARAM_INT); 
    $stmt->execute();
  };

  function getIcons(){
    global $db;
    $requete = $db->prepare('SELECT*FROM icons ORDER BY id_icon DESC');
    $requete -> execute();       
    $data= $requete -> fetchALL(PDO::FETCH_OBJ);
    return $data;
};

function getIcon($id){
  global $db;
  $requete = $db -> prepare('SELECT * FROM icons WHERE id_project = ?');
  $requete -> execute(array($id));
  $data = $requete -> fetch(PDO :: FETCH_OBJ);
  return $data;
};

function getNews(){
  global $db;
  $requete = $db->prepare('SELECT * FROM news ORDER BY date_news DESC');
  $requete -> execute();       
  $data = $requete -> fetchALL(PDO::FETCH_OBJ);
  return $data;
};

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
};

function deleteNews($id){
  global $db;
  $requete= "DELETE FROM news WHERE id_news = ?";
  $stmt= $db->prepare($requete);
  $stmt->bindParam(1, $id, PDO::PARAM_INT); 
  $stmt->execute();
};

function getTeam(){
  global $db;
  $requete = $db->prepare('SELECT * FROM team ORDER BY id ASC');
  $requete -> execute();       
  $data = $requete -> fetchALL(PDO::FETCH_OBJ);
  return $data;
};

function getJobs(){
  global $db;
  $requete = $db->prepare('SELECT * FROM jobs JOIN icons ON jobs.ext_icon = icons.id_icon ORDER BY id_job DESC');
  $requete -> execute();       
  $data= $requete -> fetchALL(PDO::FETCH_OBJ);
  return $data;
}; 

function getJob($id){
  global $db;
  $requete = $db->prepare('SELECT * FROM jobs JOIN icons ON jobs.ext_icon = icons.id_icon WHERE id_job  = ? ');
  $requete -> execute(array($id));
  if($requete -> rowCount() == 1){
      $data = $requete -> fetch(PDO :: FETCH_OBJ);
      return $data;
  }
  else {
      header('Location: index.php');
  }
};

function getPostMMI(){
  global $db;
  $requete = $db->prepare('SELECT * FROM postmmi ORDER BY id_postmmi ASC');
  $requete -> execute();       
  $data = $requete -> fetchALL(PDO::FETCH_OBJ);
  return $data;
};
