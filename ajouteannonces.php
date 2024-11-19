<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $publie_par = $_SESSION['user_id'];

    // Gestion de l'image
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $image_name = uniqid() . '-' . basename($image['name']);
        $image_path = 'uploads/' . $image_name;

        // Déplacement de l'image vers le dossier "uploads"
        if (move_uploaded_file($image['tmp_name'], $image_path)) {
            // Insertion de l'annonce avec l'image dans la base de données
            $sql = "INSERT INTO annonces (titre, contenu, image_url, publie_par) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$titre, $contenu, $image_path, $publie_par]);

            echo "Annonce publiée avec succès !";
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    } else {
        echo "Veuillez sélectionner une image valide.";
    }
}
?>

<!-- Formulaire pour ajouter une annonce -->
<form method="post" enctype="multipart/form-data">
    <input type="text" name="titre" placeholder="Titre de l'annonce" required>
    <textarea name="contenu" placeholder="Contenu de l'annonce" required></textarea>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Publier l'annonce</button>
</form>
