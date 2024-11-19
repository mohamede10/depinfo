<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);
    $licence_id = $_POST['licence_id'];

    $sql = "INSERT INTO users (nom, prenom, matricule, email, mot_de_passe, licence_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $prenom, $matricule, $email, $mot_de_passe, $licence_id]);

    echo "Inscription réussie !";
}
?>
<!-- Formulaire d'inscription -->
<form method="post">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="text" name="matricule" placeholder="Matricule" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
    <select name="licence_id">
        <option value="1">Licence 1</option>
        <option value="2">Licence 2</option>
        <option value="3">Licence 3</option>
    </select>
    <button type="submit">S'inscrire</button>
</form>
