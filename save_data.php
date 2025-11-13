<?php
// save_data.php - SIMULATION DE TRAITEMENT CÔTÉ SERVEUR

// IMPORTANT: Ce script nécessite un environnement PHP pour fonctionner.
// Il simule l'enregistrement de données (comme celles du formulaire de contact
// ou celles obtenues via un vrai processus d'authentification Gmail OAuth).

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Collecte des données (simulée)
    $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Utilisateur Gmail';
    $email = isset($_POST['email']) ? $_POST['email'] : 'utilisateur@connecte.com';
    $message = isset($_POST['message']) ? $_POST['message'] : 'Connexion via Gmail réussie.';

    // 2. SIMULATION DE L'ENREGISTREMENT EN BASE DE DONNÉES
    // REMARQUE : Dans un environnement réel, vous devriez utiliser une base de données sécurisée.
    /*
    $file = 'utilisateurs_zaga.txt';
    $current_data = "Date: " . date('Y-m-d H:i:s') . "\n";
    $current_data .= "Nom: " . $nom . "\n";
    $current_data .= "Email: " . $email . "\n";
    $current_data .= "Message/Note: " . $message . "\n";
    $current_data .= "--------------------------------------\n";

    // Écriture des données à la fin du fichier
    file_put_contents($file, $current_data, FILE_APPEND | LOCK_EX);
    */
    
    // 3. Redirection vers la page de succès
    header("Location: success.html");
    exit();
    
} else {
    // Si la page est accédée directement sans POST, rediriger vers l'accueil
    header("Location: index.html");
    exit();
}

?>
