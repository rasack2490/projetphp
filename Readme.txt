Documentation du Projet : Formulaire d'Inscription PHP avec Base de Données MySQL
Introduction
Ce projet consiste à créer un formulaire web d'inscription où les utilisateurs peuvent soumettre leurs informations personnelles. Les données entrées dans le formulaire sont ensuite enregistrées dans une base de données MySQL. Un fichier PHP traite les données soumises et gère leur stockage dans la base de données.

Structure du projet
MVC
MODEL, VIEW, CONTROLLER
Installation
il existe de deux methodes 
Clonez le fichier avec github a travers le lien GITHUB
https://github.com/rasack2490/projetphp.git

ou dezipper le fichier .
Ensuite créez une base de données MySQL et importez le schéma à partir du fichier Projet/_classes/table.sql.
Configurez les informations de connexion à la base de données dans le fichier Projet/_config/config.php.
Assurez-vous que votre serveur web est configuré pour exécuter le lien:
http://localhost/projetphp/home 
Utilisation
Accédez à inscription dans votre navigateur grace au button s'inscrire sur la page de connexion.
 et remplissez le formulaire avec vos informations (nom d'utilisateur, mot de passe, email, etc.).
 et soumettez le formulaire et l'enregistrement des utilisateurs avec nom d'utilisateur, mot de passe et email.
Le fichier process.php traitera les données et les enregistrera dans la base de données.
dans le cas ou on c'etait deja inscrit il suffit d'appuyer sur connexion et remplir les differents champs demander et on se connecte
Dans le cas ou l'on veut apporter des modifications il suffit de cliquez sur la partie modification cela vous envoyer sur votre base de donnée qui permettra d'apporter des modification et si c'est bon une fonction succes apparaitra
Cryptage sécurisé des mots de passe.
Validation côté serveur pour éviter les erreurs et les doublons.
Utilisation de requêtes préparées pour empêcher les injections SQL.
Bonnes Pratiques

Membres du groupe:
	GOMGNIMBOU Fatima
	YOUGBARE CHEICK OUMAROU
	ZOMBRE Lionel
	NANA Abdoul Razack

