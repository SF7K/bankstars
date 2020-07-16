#H1 BANKSTARS
===
_**Bankstars** est une application permettant de naviguer dans plusieurs fiches de stars._ <br/>

Les pages "/" et "/profiles" sont accessibles à tous types de visiteurs, il n'y a pas de restrictions. <br/>
Si vous voulez avoir la possibilité d'**ajouter**, de **modifier** ou encore de **supprimer** une fiche, il faudra vous connecter ou vous inscrire. <br/>

Dans le code vous trouverez une table "roles", j'ai effectivement voulu créer des rôles et des droits différents pour la modification, et la suppression de profil. <br/>
Mais par manque de temps je n'ai pas pu m'y pencher autant que je le souhaitait, ça arrivera donc plus tard ! <br/>
Sur la page "/home" on y aurait vu le rôle occupé par l'utilisateur, et les boutons se seraient affichés en fonction des droits de l'utilisateur. </br>

**Les images** : </br>
Les images sont stockées côté serveur dans le dossier : "/storage/app/public/img/". </br>
A chaque modification, ou suppression de profil (ou juste de la photo en cas de modification) l'image est supprimée du serveur. </br>
Donc si vous voulez re-seeder la database, il faudra copier/coller les images du dossier "/seedressources" dans le dossier "/storage/app/public/img/" pour que l'application</br>
puisse faire le lien entre le nom de l'image de profil stocké en base de données et la-dite image stockée sur le serveur.</br>
 
Le nom de la base de donnée est "bankstars" et voici ses infos dans le .env : <br/>
 
**DB_CONNECTION**=mysql <br/>
**DB_HOST**=localhost <br/>
**DB_PORT**=3306 <br/>
**DB_DATABASE**=bankstars <br/>
**DB_USERNAME**=root <br/>
**DB_PASSWORD**=mdpbdd <br/>

Liste des utilisateurs déjà enregistrés :<br/>
- **e-mail adress** : admin@admin.ad | **password** : mdpfictif <br/>
- **e-mail adress** : modo@mail.com | **password** : mdpfictif <br/>
- **e-mail adress** : simpleuser@mail.com | **password** : mdpfictif <br/>

Le projet a été fait sur Laravel 7 et installé avec Homestead. <br/>
Le front a été fait sous Boostrap 4 pour un premier visuel simple et une compatibilité avec les mobiles. </br>