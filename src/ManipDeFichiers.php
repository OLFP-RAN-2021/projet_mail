<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="transfer_css.css">
    <title>Document</title>
</head>


<body>



    <!-- $file = fopen("fichier.txt", "r") or exit("Le fichier demandé ne
              peut être ouvert ou est inexistant!");


    $NomFichier = "FichierTest.txt";
    $FichierHandle = fopen($NomFichier, 'w') or die("impossible d'ouvrir le fichier");
    $stringData = "Pomme de terre \n";
    fwrite($FichierHandle, $stringData);
    $stringData = "Tomate cerise \n";
    fwrite($FichierHandle, $stringData);
    $stringData = "Petit pois \n";
    fwrite($FichierHandle, $stringData);
    fclose($FichierHandle);
    echo "Les données ont été écrites dans le fichier " . $NomFichier . "<br>";

    $file = fopen($NomFichier, "r") or exit("Le fichier demandé ne
    peut être ouvert ou est inexistant!!");
    // Sortir d'une ligne du fichier lorsque la fin est atteinte
    while (!feof($file)) {
        echo fgets($file) . "<br />";
    }
    fclose($file);*/



    ?>  -->

    <div>WeTransfer</div>

    <div>

        <form action="mail.php" method="post" enctype="multipart/form-data">
            <label for="file">Nom du fichier:</label>
            <input type="file" name="file" id="file" />
            <br>
            <label for="file">Nom du fichier:</label>
            <input type="file" name="file" id="file" />
            <br>
            <label for="file">Nom du fichier:</label>
            <input type="file" name="file" id="file" />
            <br>
            <label for="file">Nom du fichier:</label>
            <input type="file" name="file" id="file" />
            <br>
            <label for="file">Nom du fichier:</label>
            <input type="file" name="file" id="file" />
            <br><br><br><br>
            <label for="email">Email:</label><input type="email" name="courriel" id="emailAddress" /><br><br>
            <label for="msg">Message:</label><textarea name="user_message" id="msg" rows="10" cols="27"></textarea><br><br>
            <input type="submit" name="submit" value="Envoyer" />
        </form>
    </div>



</body>

</html>