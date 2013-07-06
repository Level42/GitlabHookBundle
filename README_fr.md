[< Retour](https://github.com/Level42/GitlabHookBundle/blob/master/README.md "< Retour")


1) Installation
----------------------------------
Télécharger le bundle dans src/Level42/GitlabHookBundle

ou plus moderne, l'ajouter à votre fichier composer.json

    "require": {
        ...
        "level42/gitlabhook-bundle": "0.1-dev"
        ...
    },
    
Si vous n'avez pas encore composer, téléchargez le et suivez la procédure d'installation sur
[http://getcomposer.org/](http://getcomposer.org/ "http://getcomposer.org/").

2) Utilisation
-------------------------------
Utiliser le service "level42.gitlab.services.hook".
La méthode "analyseHook" prends un argument : le message du hook (la chaine non encodée en json).
En retour, un object Hook

3) Changelog
-------------------------------
#### Version 0.1
Date : 2013-07-06
Première version stable