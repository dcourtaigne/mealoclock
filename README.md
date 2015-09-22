## Mealoclock

## Installer W:
* installer composer si ce n'est pas déjà fait
* dans git bash naviguer vers le dossier du projet puis taper "composer install"
* cela va créer le dossier "vendor" et y installer les fichiers pour Plates (moteur de template) et Altorouter (gestionnaire de routes).

## Installer la BDD de dev:
* récupérer les tables de la base de données mealoclock.sql existant sur le git repository (git pull)
* créer une base de données sur votre localhost et y importer le fichier mealoclock.sql
* si tout se passe bien les tables sont créées avec des fake datas

## Configurer W:
* créer une copie du fichier config.dist.php et renommer la copie config.php
* ouvrir config.php et y indiquer le nom de votre BD ainsi que le nom et mot de passe du user BDD (root et mot de passe vide si vous n'avez pas créé d'utilisateur dans PHP my admin)
