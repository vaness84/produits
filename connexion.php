
<?php

function connectTo(){
    try {
        $base = new PDO('mysql:host=127.0.0.1; dbname=jarditou', 'root', '');
        echo "ok connexion";
        // Ajout d'une option PDO pour gérer les exceptions
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $result = $base->query("SELECT * FROM produits WHERE pro_id = 7");
    
        $produit = $result->fetch(PDO::FETCH_OBJ);
    
        $result->closeCursor();
    } catch (Exception $e) {
    
        echo 'Erreur : ' . $e->getMessage() . '<br />';
    
        echo 'N° : ' . $e->getCode();
    
        die('Fin du script');
    }
}
?>
