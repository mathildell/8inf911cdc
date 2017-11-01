# mvc_base_8INF911

### Installer le projet
Sur MAMP/WAMP/XAMP ou autre serveur Apache virtuel:

```git clone https://github.com/mathildell/mvc_base_8INF911.git```

Dans phpMyAdmin, importer le fichier dump.sql.

Dans `config/`, éditez DatabaseConfig.php avec vos identifiants de database.
GeneralConfig.php regroupe les informations générales de votre site (auteur, description...)

Vous pouvez utiliser var_dump(); autour de vos données pour débugger ce qu'elles contiennent. Si le site plante, vous pouvez utiliser die(); pour intérompre l'exécution du programme à la volée et voir à partir de quelle ligne le problème émmerge. 

### Utiliser Boostrap (inclut) 
 * Pour la documentation: [Bootstrap](http://getbootstrap.com/docs/4.0/getting-started/introduction/)
 * Pour des templates déjà-fait: [StartBootstrap](https://startbootstrap.com)

### Éditer le HTML du header, nav, footer
Les fichiers sont dans `view/layout/inc/`

### Éditer le CSS du header, nav, footer 
Les fichiers sont dans `view/assets/css/`

Le seul fichier lié dans les pages web est main.css (les autres fichiers sont importés @import)

Les fichiers contenant le css sont divisés comme ci-suit:

 * `bootstrap/` contient les fichiers sources de bootstrap
 * `components/` contient les parties fondamentales du layout qui sont sur toutes les pages
 * `layout/` contient fichiers spécifiques (design par page etc)

nav.css, header.css et footer.css sont dans `components/`

### Créer une nouvelle page

Dans 'view/layout/' créer un nouveau dossier du même nom que votre page. Exemple: "asperge".

Dans ce nouveau dossier, créer un fichier index.php

Y mettre ce code par défaut:
```php
<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>
  X1
<?php endblock(); ?>

<?php startblock('pageContent'); ?>
  X2
<?php endblock(); ?>
```
Où X1 est le titre de la page (apparait dans l'onglet), et X2 est le contenu (le HTML, hors navigation, header, footer). 

Pour linkez cette page, utilisez son nom. Exemple: `"http://localhost/?p=asperge"`

### Utiliser la database
Utilisez `model/Database.php` pour générer vos requêtes sql à la BDD. 

Récuppérez les dans un controller.

### Le `index.php` principal

Il gère l'affichage des pages, init les classes du controller, s'occupe de l'autoloader.

### Preview
![alt text](http://oi64.tinypic.com/2ziuele.jpg "Preview")


