<?php
include 'db.php';

// Envoyer un message
if (isset($_POST['envoyer'])) {
    $id_etudiant = $_POST['id_etudiant'];
    $message = $_POST['message'];
    $licence = $_POST['licence'];

    $sql = "INSERT INTO chats (id_etudiant, message, licence) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_etudiant, $message, $licence]);

    echo "Message envoyé.";
}

// Afficher les messages du chat
$sql = "SELECT etudiants.nom, etudiants.prenom, chats.message, chats.date_message 
        FROM chats 
        JOIN etudiants ON chats.id_etudiant = etudiants.id 
        WHERE chats.licence = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_GET['licence']]);
$messages = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>
    <h1>Chat de Licence <?php echo $_GET['licence']; ?></h1>
    <ul>
        <?php foreach ($messages as $message): ?>
            <li><?php echo $message['nom'] . ' ' . $message['prenom'] . ': ' . $message['message']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
