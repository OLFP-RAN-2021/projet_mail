
  <?php

    echo "Fichier à télécharger : " . $_FILES["file"]["name"] .
        "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Taille: " . ($_FILES["file"]["size"] / 1024) . "
  Kb<br />";
    echo "Fichier temporaire : " . $_FILES["file"]["tmp_name"] .
        "<br />";


    move_uploaded_file(
        $_FILES["file"]["tmp_name"],
        "C:\wamp64\/" . $_FILES["file"]["name"]
    );
    echo "Enregistré dans : " . "upload/" .
        $_FILES["file"]["name"];


    ?>

