<?php
include 'db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matricule = $_POST['matricule'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT * FROM users WHERE matricule = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$matricule]);
    $user = $stmt->fetch();

    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['nom'] = $user['nom'];
        echo "Connexion réussie !";
    } else {
        echo "Matricule ou mot de passe incorrect.";
    }
}
?>
<!-- Formulaire de connexion -->
<form method="post">
    <input type="text" name="matricule" placeholder="Matricule" required>
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>
