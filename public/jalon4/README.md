## Auteurs
- BARGE Antony
- HERSEMEULE Bruce

## Jalon 4

# Description
Dans ce dernier jalon, nous avons pu valider une majeure partie du travail à réaliser. 
Notre application Web constitue un lecteur d'animes, se rapprochant des plateformes de streaming connues.


# Pour tester et valider notre travail :
   - Il est recommandé de reprendre notre projet de 0, c'est à dire de recommencer la migration et le seeding (
         - php artisan migrate
         - création de compte : 
                  - Aller sur la page d'accueil : http://localhost:5080/catalogue/public/
                  - Clicker sur "Register" en haut à droite afin de vous inscrire.
                  - Remplir le formulaire en n'oubliant pas un @ dans l'adresse mail et d'utiliser un mot de passe d'au moins 8 caractères. Ensuite, clicker sur le bouton "Sign Up" afin de valider son inscription. Cela vous ramène sur la page d'accueil.
         - php artisan db:seed --class=animeSeeder)
   - Avant de commencer, il faudra préparer une image de profil (si possible carré), si ce n'est pas déjà le cas nous proposons d'utiliser la magnifique image de Picsou disponible dans le dossier jalon 3.

La suite constitue un parcours type permettant de faire le tour des fonctionnalités implémentées, en observant les pages avant/après chaque instruction :
   - A côté de votre pseudo en haut à droite, vous trouverez un menu déroulant. Cliquer sur le menu déroulant puis sur "Disconnect".
   - Clicker sur "Login" en haut à droite afin de se reconnecter. Dans le cas ou vous ne retrouvez pas votre duo identifiant/mot de passe, recommencer l'inscription (on n'a pas développé de fonctionnalité pour les mots de passe oubliés, bien qu'elle soit presque déjà implémentée grâce à Fortify).
   - Clicker de nouveau sur le menu déroulant, clicker sur "See my profile".
   - Clicker sur un des champs dans la colonne de gauche, ceux dans la section "My profile". Vous arriverez sur un formulaire de mise à jour de vos données utilisateur.
   - Modifier au minimum un des champs, on propose par exemple la ligne "Location", qui sera visible dans la page profile. Clicker sur update pour mettre à jour. Une redirection Fortify ayant pris le dessus, il faudra revenir sur votre page profil par un autre moyen : pour revenir à la page d'accueil, vous pouvez clicker sur le bouton AnimeTflix en haut à gauche ou "home" juste sous le forme.
   - Clicker de nouveau sur le menu déroulant, clicker sur "See my profile".
   - Les champs modifiés sont observables ici. Pour changer la photo de l'avatar, clicker dessus.
   - Maintenant que vous êtes sur le form d'upload d'une image choississez l'image de Picsou (ou tout autre image à votre disposition). Sachez néanmoins qu'il y a une modification du format, les images de profil carrées sont donc recommandées. Clicker sur update.
   - Vous voilà de retour sur votre profil avec une merveilleuse image de Picsou (ou pas).
   - Ensuite il suffit d'utiliser la barre de recherche en haut avec un texte vide (en séléctionnant la search bar puis en appuyant sur Entrer).
   - Tester les différents tris en cochant au maximum jusqu'à un par catégorie à la fois. Une fois coché, il suffit de se mettre dans la barre de search en dessous et d'appuyer sur Entrer sans entrer de texte.
   - Sur les cartes, les boutons like, dislike et add to playlist permettent d'ajouter les animes à des playlists existentes ou d'en créer une nouvelle (en rentrant son nom puis en appuyant sur Entrer).
   - Clicker sur une carte d'un anime afin de se rendre sur une page de Display. On observe 2 sections sur les onglets du côté : "Next episodes" ou "Comment section".
   - Appuyer sur le bouton "My Collection" de la navigation bar. Il permet comme le search de lister les animes mais on peut maintenant les sélectionner par playlist.
   - Retourner dans le profile comme dans l'étape 3 du parcours. On observe en bas l'historique de l'utilisateur. Les 4 boutons permettent aussi de sélectionner certains groupes d'animes. L'idée est ici de pouvoir implémenter un système de statistiques dans le futur.
   - Enfin pour les droits d'admin, dans un nouvel onglet, se rendre dans la base de données MySQL, se connecter avec "root" et "root", et aller dans la base users dans medias
   - Retrouver votre compte et changer manuellement le status de "guest" à "admin". 
   - En raffraichissant la page profile de notre autre onglet, deux nouveaux choix sont apparus dans la barre de gauche.
   - "Comments" qui permet d'afficher tous les commentaires non modérés et "Users" pour afficher tous les utilisateurs. L'idée est de pouvoir implémenter les fonctionnalités d'édition permettant de modifier des commentaires si l'on est modérateur (les admins sont des modérateurs) ou de modifier le status des utilisateurs (ce qu'on a dû faire manuellement pour notre compte).
   - De la même façon que pour les étapes précedentes, passer le status de votre compte à "modo" dans MySQL.
   - En raffraichissant la page profile, les données de la table users ont disparus puisque les modérateurs ne doivent pas y avoir accès (les modérateurs ne sont pas nécessairement admins). L'option de contrôle des commentaires reste cependant fonctionnelle.



Vidéo de démonstration : sera poster ultérieurement dans un futur commit du nom de jalon4Video : https://youtubexxxx

