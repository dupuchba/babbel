Babbel website
========================

Additionnal Bundles:

BazingaFakerBundle: https://github.com/willdurand/BazingaFakerBundle pour populer la database
FOSJsRoutingBundle: https://github.com/FriendsOfSymfony/FOSJsRoutingBundle/ pour utiliser les routes sous js (ajax)

Installation
========================

1)Récupération du répo sur github:
git clone git@github.com:dupuchba/babbel.git

2)Eventuellement faire un fork du répo

3)Mise à jour du répertoire vendor avec toute les sources de symfony
php bin\vendor update

4)Téléchargement de BazingaFakerBundle à placer dans vendor\bundles\Bazinga\Bundle\FakerBundle https://github.com/willdurand/BazingaFakerBundle

5)Téléchargement de la Faker lib à placer dans vendor\faker
 
6)Télechargement de FOSJsRoutingBundle à placer dans \vendor\bundles\FOS\JsRoutingBundle https://github.com/FriendsOfSymfony/FOSJsRoutingBundle/

7)Rennomer le fichier app\conig\parameters.dist.ini en app\conig\parameters.ini 

8)Prendre la dernière version stable de symfony2    https://github.com/symfony/symfony/tags TRES IMPORTANT. Le placer dans vendor/symfony

9)Créer la BDD avec la commande symfony "php app/console doctrine:database:create"

10)Créer les tables avec la commande symfony "php app/console doctrine:schema:update --force"

11)Mettre des données dans les tables avec la commande "php app/console faker:populate"

12)Installer les js/img/css dans le repertoire public (à faire à chaque modif js) "php app/console assets:install web"

