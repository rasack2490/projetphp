Documentation du Projet : Formulaire d'Inscription PHP avec Base de Données MySQL
Introduction
Ce projet consiste à créer un formulaire web d'inscription où les utilisateurs peuvent soumettre leurs informations personnelles. Les données entrées dans le formulaire sont ensuite enregistrées dans une base de données MySQL. Un fichier PHP traite les données soumises et gère leur stockage dans la base de données.

Structure du projet
MVC
modele view controleur
Installation
il existe de deux methodes 
Clonez le fichier avec github a travers le lien du projet ou dezipper le fichier .
Ensuite créez une base de données MySQL et importez le schéma à partir du fichier database.sql.
Configurez les informations de connexion à la base de données dans le fichier config.php.
Assurez-vous que votre serveur web est configuré pour exécuter les fichiers PHP
Utilisation
Accédez à inscription.html dans votre navigateur grace au lien d'inscription.
 premier cas dans la mesure ou n'est pas encore inscrit appuyer sur le bouton inscription 
 et remplissez le formulaire avec vos informations (nom d'utilisateur, mot de passe, email, etc.).
 et soumettez le formulaire et l'enregistrement des utilisateurs avec nom d'utilisateur, mot de passe et email.
Le fichier process.php traitera les données et les enregistrera dans la base de données.
dans le cas ou on c'etait deja inscrit il suffit d'appuyer sur connexion et remplir les differents champs demander et on se connecte
Dans le cas ou l'on veut apporter des modifications il suffit de cliquez sur la partie modification cela vous envoyer sur votre base de donnée qui permettra d'apporter des modification et si c'est bon une fonction succes apparaitra
Cryptage sécurisé des mots de passe.
Validation côté serveur pour éviter les erreurs et les doublons.
Utilisation de requêtes préparées pour empêcher les injections SQL.
Bonnes Pratiques


