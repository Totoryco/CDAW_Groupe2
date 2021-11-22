## Auteurs
- BARGE Antony
- HERSEMEULE Bruce

## Jalon 1

# Description
Les médias choisis sont des animes. Il peut aussi s'agir de films d'animation.
Les animes possèderont donc chacun :
   - un ou plusieurs genre(s), 
   - un nombre de saisons,
   - un nombre d'épisodes,
   - un auteur
   - un studio d'animation
   - une date de création
Une saison est constituée de plusieurs épisodes. 
Chaque épisode possèdera des métadonnées :
   - date de sortie
   - durée
   - numéro dans la saison
   - saison à laquelle il appartient
   - nombre de likes
   - nombre de vues
Le complément de ces informations dépendra de ce qui nous sera accessible par la suite.


# Pour tester et valider notre travail :
   - consulter la maquette papier des fenêtres dans public/jalon1/analyse/ 
      (avec la page profile et otherprofile en haut à gauche,
      la page lobby et mycollection en haut à droite,
      la page display en bas à droite,
      et la page search en bas à gauche)
   - ouvrir un container Docker pour le workspace
   - se rendre sur le lien : http://localhost:8080/jalon1/login/index.html pour atteindre la page d'accueil qui ouvrira une page de connection

La suite constitue un parcours type permettant de faire le tour des fonctionnalités implémentées, en observant les pages avant/après chaque instruction :
   - clicker sur "Sign up here" en bas afin de simuler une inscription
   - rentrer n'importe quels caractères dans les champs "Username" "Email Address" (@ exigé), "Password" et "Confirm Password" puis clicker sur le bouton "Sign Up" afin de valider son inscription
   - clicker sur "Reset my password" en bas afin de simuler un oubli de son mot de passe
   - rentrer n'importe quels caractères dans le cham "Email Address" (@ exigé) puis clicker sur le bouton "reset", qui simulera un envoi de nouveau mot de passe
   - rentrer n'importe quels caractères dans les champs "Username" et "Password", puis clicker sur le bouton "Login in" afin de se connecter fictivement
   - écrire un message dans une barre de recherche afin d'atteindre la page de recherche
   - aller dans "My collection" avec le bouton en haut à droite de la barre de navigation
   - clicker sur n'importe quel "item" d'anime
   - clicker sur le bouton "Comment section" de la tabbar du côté droit (à droite de "Next epsiodes")
   - clicker sur l'image ronde représentant l'avatar d'un utilisateur ou sur son nom ("Commenter Name") afin de se rendre sur son profil
   - avec le menu déroulant du bouton "Profile" juste à côté du bouton "My collection", sélectionner "See my profile"

Il est à noter que la gestion des commentaires se fera à l'aide d'un bouton edit à côté de chaque commentaire (dans la page de display des épisodes ou dans la page de profil d'un autre utilisateur) lorsque l'on est connecté en tant que modérateur.
De même, un bouton supplémentaire pour les administrateurs sera situé dans la barre de gauche de la page profil d'un autre utilisateur et premettra à l'admin d'attribuer le rôle de modérateur, d'utilisateur normal, d'utilisateur banni (avec temporalité) ou alors d'admin.
Pour ce qui est du signalement de commentaires, on pense qu'il vaut mieux que tous les utilisateurs y aient accés et le commentaire serait alors surligné ou d'une autre couleur aux yeux des modérateurs et administrateurs.
