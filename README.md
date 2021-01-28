# Projet Docker pour les étudiants

## Description du projet

il s'agit de compiler Symfony 5 dans un gestionnaire de conteneurs par docker -compose
notre hub est composé de 3 nœuds:

- `nginx`, agissant comme un répartiteur de passerelle entre les conteneurs + load_balancer dans (version prod).
- `php_server`, le conteneur PHP-FPM avec la version 7.4.9 PHP, il inclut l'outil composer. (compositeur à diviser en un autre conteneur dans la prochaine version)
- `db_` qui est le conteneur de base de données MySQL avec une image Mysql.

Il existe un fichier de structure .env sans données dans le fichier **. Env.struct **

## pour les tests pre-prod 
un fichier .env.prod pour la preproduction du projet  et un fichier docker-compose.prod.yml 
