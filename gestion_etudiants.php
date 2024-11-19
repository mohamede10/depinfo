<?php
include 'db.php';

// Ajouter un étudiant
if (isset($_POST['ajouter'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $matricule = $_POST['matricule'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);
    $annee_inscription = $_POST['annee_inscription'];
    $licence = $_POST['licence'];

    $sql = "INSERT INTO etudiants (nom, prenom, email, mot_de_passe, matricule, annee_inscription, licence) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $mot_de_passe, $matricule, $annee_inscription, $licence]);

    echo "Étudiant ajouté avec succès.";
}

// Afficher tous les étudiants
$sql = "SELECT * FROM etudiants";
$stmt = $conn->query($sql);
$etudiants = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <ul>
        <?php foreach ($etudiants as $etudiant): ?>
            <li><?php echo $etudiant['nom'] . ' ' . $etudiant['prenom']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
