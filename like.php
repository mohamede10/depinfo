<?php
include 'db.php';
session_start();

if (isset($_GET['annonce_id'])) {
    $annonce_id = $_GET['annonce_id'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO likes (user_id, annonce_id) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $annonce_id]);

    header("Location: annonces.php");
}
?>
