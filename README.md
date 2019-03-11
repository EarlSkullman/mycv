# S4C2 LEPLOMBLéo - Mon CV

Ce CV est voulu pour être modifiable, d'être réutilisable par d'autres utilisateurs mais également d'être mis à jour de manière simplifié.


## Fonctionalités majeures:

* Tout le contenu texte est modifiable: une fois connecté en tant qu'administrateur vous avez accès au système de modification suivant : CRUD. Il permet de créer /modifier / supression.![Alt text](/imgReadMe/crud.PNG "Modifications")
* Le menu renvoie a des encre sur le site et le scroll ce fait a travers une fonction javascript afin d'etre plus fluide.
* Il y a deux tests , un test unitaire qui vérifie si la class et l'Entity Experience fonctionne, et un texte fonctionnel si la base renvoie bien le nom de l'Entity personne.
* L'annotion @ApiResource est présente sour chaque entité. ![Alt text](/readimg/api.PNG "Modification")
* Le formulaire de contact enregistre les données sur la base de donnée.
* Le projet est selon Checkstyle conforme.
On se connecte via la méthode In_memory.

### Prérequis

Pour se connecter à mon Curriculum Vitae, le lien est le [suivant](https://test-php-earlskullman.c9users.io/my_cv/public/index.php/)

## Installation

Créer un dossier my_cv puis glisser les éléments à l'intérieur.

```
cd my_cv
```
Puis utiliser la commande suivante :

```
 php bin/console
```
## Les tests

### Ce test vérifie si l'Entity Experience fonctionne et ajoute bien les titre grace au fonction SetTitle

```
 php vendor/bin/codecept run unit ExampleTest
```
![Alt text](/imgReadMe/assertunit.PNG "assertion")
-------------------------------------------------------------------------------------------

### Ce test vérifie si il trouve mon nom et prénom Dans la page principale du CV

```
 php vendor/bin/codecept run acceptance Cest
```
![Alt text](/imgReadMe/acceptance.PNG "acceptance")

## Partie Administrative

Appuyer sur le bouton se connecter
* Identifiant :  admin
* Mot de passe : admin

![Alt text](/imgReadMe/menu.PNG "Connection")

## Auteurs

* **Coquil** - *Initiateur* -
* **EarlSkullman**