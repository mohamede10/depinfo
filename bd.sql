-- Création de la base de données
CREATE DATABASE gestion_departement;

-- Utilisation de la base de données
USE gestion_departement;

-- Table utilisateurs (users)
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    matricule VARCHAR(50) UNIQUE,
    licence_id INT,
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(255),
    photo_profil VARCHAR(255),
    statut VARCHAR(50),
    FOREIGN KEY (licence_id) REFERENCES licences(licence_id)
);

-- Table licences
CREATE TABLE licences (
    licence_id INT AUTO_INCREMENT PRIMARY KEY,
    nom_licence VARCHAR(50)
);

-- Table annonces
-- Table annonces avec images
CREATE TABLE annonces (
    annonce_id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255),
    contenu TEXT,
    image_url VARCHAR(255), -- Ajout d'une colonne pour stocker le chemin de l'image
    date_publication DATETIME DEFAULT CURRENT_TIMESTAMP,
    publie_par INT,
    FOREIGN KEY (publie_par) REFERENCES users(user_id)
);


-- Table commentaires
CREATE TABLE commentaires (
    commentaire_id INT AUTO_INCREMENT PRIMARY KEY,
    contenu TEXT,
    date_commentaire DATETIME DEFAULT CURRENT_TIMESTAMP,
    annonce_id INT,
    commentaire_par INT,
    FOREIGN KEY (annonce_id) REFERENCES annonces(annonce_id),
    FOREIGN KEY (commentaire_par) REFERENCES users(user_id)
);

-- Table likes
CREATE TABLE likes (
    like_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    annonce_id INT,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (annonce_id) REFERENCES annonces(annonce_id)
);

-- Table partages
CREATE TABLE partages (
    partage_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    annonce_id INT,
    plateforme VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (annonce_id) REFERENCES annonces(annonce_id)
);

-- Table chats
CREATE TABLE chats (
    chat_id INT AUTO_INCREMENT PRIMARY KEY,
    message TEXT,
    media_url VARCHAR(255),
    envoye_par INT,
    licence_id INT,
    date_envoi DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (envoye_par) REFERENCES users(user_id),
    FOREIGN KEY (licence_id) REFERENCES licences(licence_id)
);

-- Table inscriptions
CREATE TABLE inscriptions (
    inscription_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
    type_inscription VARCHAR(50),
    etat_inscription VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
