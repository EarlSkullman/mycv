# S4C2 LEPLOMBLéo - Mon CV

Ce Cv est voulu  pour être modifiable, d'être réutilisable par d'autres utilisateurs mais également d'être mis à jour de manière simplifié.


## Fonctionalités majeurs:

* Tout le contenu texte est modifiable: une fois connecté en tant qu'administrateur vous avez accès a des bouton de modification / création / supression.![Alt text](/readimg/admin.PNG "Modification")
* Pour la photo de l'utilisateur, ainsi que les photo de la catagorie spotlight, les liens des photos sont enregistrer en base de donné et sont donc directement modifable vien le lien.
* La catégorie spotlight mais en avant des réalisation de manière aléatoire.![Alt text](/readimg/spot.PNG "Mise en avant")
* La modification de votre niveau en langue modifie la classe Css et met a jour directement le nombre de point colorié. ![Alt text](/readimg/lang.PNG "Langues")
* Le menu renvoie a des encre sur le site et le scroll ce fait a travers une fonction javascript afin d'etre plus fluide.
* Les réalisation sont gérés dans un Isotope, soit il est possible au visiteur de trié les créations a l'aide des bouton. ![Alt text](/readimg//tri.PNG "Tri")
* Il y a deux test , un test unitaire qui test si la class et l'Entity Experience fonctionne, et un texte fonctionnel si la base renvoie bien le nom de l'Entity personne.
* L'annotion @ApiResource est présente sour chaque entité. ![Alt text](/readimg/api.PNG "Modification")
* Le formulaire de contact enregistre les données sur la base de donnée.
* Le projet est selon Checkstyle conforme.
* Il et possible de ce connecter selon la méthode In_memory.

### Prérequis

Pour se connecter à mon Curriculum Vitae le lien est le [suivant](https://test-php-earlskullman.c9users.io/my_cv/public/index.php/)

## Installation

Crée un dossier my_cv puis glissé les éléments a l'interieure.

```
cd my_cv
```
Puis les commandes sont accessible via la commande 

```
 php bin/console
```
## Les tests

### Ce test vérifie si l'Entity Experience fonctionne et ajoute bien les titre grace au fonction SetTitle

```
 php vendor/bin/codecept run unit ExampleTest
```
![Alt text](/readimg/assertion.PNG "assertion")
-------------------------------------------------------------------------------------------

### Ce test vérifie si il trouve mon nom et prénom Dans la page principale du CV

```
 php vendor/bin/codecept run acceptance Cest
```
![Alt text](/readimg/accept.PNG "acceptance")

## Partie Administrative

Appuyer sur le bouton se connecter
* Identifiant :  admin
* Mot de passe : admin

![Alt text](/readimg/admin.PNG "Connection")

## Auteur

* **Coquil** - *Initiateur* -
* **EarlSkullman**

## Idée d'amélioration

### Premièrement des amélioration graphique
* 

### Amélioration technique
* 