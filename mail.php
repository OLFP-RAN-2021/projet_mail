<?php
require_once './vendor/autoload.php';


echo "Fichier à télécharger : " . $_FILES["file"]["name"] .
    "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Taille: " . ($_FILES["file"]["size"] / 1024) . "
  Kb<br />";
  echo "Fichier temporaire : " . $_FILES["file"]["tmp_name"] .
    "<br />";


  move_uploaded_file(
    $_FILES["file"]["tmp_name"],
    "C:\wamp64\www\depot/" . $_FILES["file"]["name"]
  );
  // 
  echo $_POST['courriel']."<br>";
  $email=$_POST['courriel'];

  echo $_POST['user_message']."<br><br>".$_FILES["file"]["name"]."<br>";
  var_dump($_POST);
  // 

  echo "Enregistré dans : " . "upload/" .
    $_FILES["file"]["name"];
  echo "<br><a href \"download.php\">Télécharger</a>";


  $lienFichier="http://localhost/depot/?fichier=". $_FILES["file"]["name"];

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('b.aissani74@gmail.com')
  ->setPassword('20000lslmdJV')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Mon mailer'))
  ->setFrom(['b.aissani74@gmail.com' => 'BRAHIM AISSANI'])
  ->setTo([$email, $email => 'Himbra'])
  ->setBody($lienFichier)
  ;
  
// Send the message

// header('Content-disposition: attachment; filename='. $nom);



$result = $mailer->send($message);
var_dump("result : /*",$result);
?>