# Youdemy - Plateforme de Gestion de Cours en Ligne

## Description
Youdemy est une plateforme en ligne permettant aux utilisateurs de s'inscrire, parcourir des cours et aux instructeurs de gérer leurs contenus pédagogiques. Ce projet suit une architecture MVC (Modèle-Vue-Contrôleur) pour assurer une structure claire et une meilleure maintenabilité du code.

## Fonctionnalités
- **Inscription et connexion des utilisateurs**
- **Parcourir et rechercher des cours**
- **Ajout et gestion des cours pour les instructeurs**
- **Analyse des performances des cours (statistiques et feedbacks)**
- **Interface utilisateur dynamique avec JavaScript**
- **Sécurisation des données avec OOP et bonnes pratiques de développement**

## Architecture MVC
Le projet suit une architecture MVC structurée en plusieurs dossiers :
- **Modèle (`Models/`)** : Gère les interactions avec la base de données.
- **Vue (`Views/`)** : Contient les fichiers d'affichage des pages web.
- **Contrôleur (`Controllers/`)** : Traite les requêtes utilisateur et met à jour les modèles et vues en conséquence.

## Technologies utilisées
- **Backend** : PHP (OOP), MySQL
- **Frontend** : HTML, CSS, JavaScript
- **Frameworks/Libraries** : Bootstrap, SweetAlert
- **Sécurité** : Protection contre XSS, SQL Injection, et gestion des sessions

## Installation
1. Cloner le dépôt :
   ```sh
   git clone https://github.com/hamzalhdouchi/youdemy.git
   ```
2. Configurer la base de données MySQL en important le fichier `database.sql`.
3. Modifier les informations de connexion à la base de données dans `config/database.php`.
4. Lancer un serveur local (ex: XAMPP, WAMP) et accéder au projet via `localhost/youdemy`.

## Diagramme des cas d'utilisation
Retrouvez le diagramme des cas d'utilisation ici :  
![Diagramme Youdemy](https://github.com/hamzalhdouchi/youdemy/blob/main/docs/use_case_diagram.png)

## Diagramme de classes
Consultez le diagramme de classes du projet ici :  
![Diagramme de Classes](https://github.com/hamzalhdouchi/youdemy/blob/main/docs/class_diagram.png)


## Auteurs
- **Hamza Lhdouchi** - Développeur Web

## Licence
Ce projet est sous licence MIT. Vous êtes libre de le modifier et de l'utiliser selon vos besoins.
