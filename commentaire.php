<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $annonce_id = $_POST['annonce_id'];
    $commentaire = $_POST['commentaire'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO commentaires (contenu, annonce_id, commentaire_par) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$commentaire, $annonce_id, $user_id]);

    header("Location: annonces.php");
}
?>
<!-- Formulaire de commentaire -->
<form method="post">
    <input type="hidden" name="annonce_id" value="<?= $_GET['annonce_id'] ?>">
    <textarea name="commentaire" placeholder="Votre commentaire" required></textarea>
    <button type="submit">Commenter</button>
</form>
