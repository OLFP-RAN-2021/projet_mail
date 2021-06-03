<html>

<body>

    <?php
    /*$file = fopen("fichier.txt", "r") or exit("Le fichier demandé ne
              peut être ouvert ou est inexistant!");*/


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
    fclose($file);



    ?>

    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        <label for="file">Nom du fichier:</label>
        <input type="file" name="file" id="file" />
        <br />
        <input type="submit" name="submit" value="Envoyer" />
    </form>

    

</body>

</html>