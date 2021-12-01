## Auteurs
- BARGE Antony
- HERSEMEULE Bruce

## Jalon 1

# Description
Dans ce jalon, nous avons pu mettre en place les principes d'authentification ainsi que des tests.


# Pour tester et valider notre travail :
   - Il recommandé de reprendre notre projet de 0, c'est à dire de recommencer la migration et le seeding (php artisan migrate; php artisan db:seed)
   - Afin d'observer nos tests et leurs résultats, utiliser la commande 
   - Avant de commencer, il faudra préparer une image de profil (si possible carré), si ce n'est pas déjà le cas nous proposons d'utiliser la magnifique image de Picsou disponible dans le dossier jalon 3.

La suite constitue un parcours type permettant de faire le tour des fonctionnalités implémentées, en observant les pages avant/après chaque instruction :
   - Aller sur la page d'accueil : http://localhost:5080/catalogue/public/
   - Clicker sur "Register" en haut à droite afin de vous inscrire.
   - Remplir le formulaire en n'oubliant pas un @ dans l'adresse mail et d'utiliser un mot de passe d'au moins 8 caractères. Ensuite, clicker sur le bouton "Sign Up" afin de valider son inscription. Cela vous ramène sur la page d'accueil.
   - A côté de votre pseudo en haut à droite, vous trouverez un menu déroulant. Cliquer sur le menu déroulant puis sur "Disconnect".
   - Clicker sur "Login" en haut à droite afin de se reconnecter. Dans le cas ou vous ne retrouvez pas votre duo identifiant/mot de passe, recommencer l'inscription (on n'a pas développé de fonctionnalité pour les mots de passe oubliés).
   - Clicker de nouveau sur le menu déroulant, clicker sur "See my profile".
   - Clicker sur un des champs dans la colonne de gauche, ceux dans la section "My profile". Vous arriverez sur un formulaire de mise à jour de vos données utilisateur.
   - Modifier au minimum un des champs, on propose par exemple la ligne "Location", qui sera visible dans la page profile. Clicker sur update pour mettre à jour. Une redirection Fortify ayant pris le dessus, il faudra revenir sur votre page profil par un autre moyen : pour revenir à la page d'accueil, vous pouvez clicker sur le bouton AnimeTflix en haut à gauche ou "home" juste sous le forme.
   - Clicker de nouveau sur le menu déroulant, clicker sur "See my profile".
   - Les champs modifiés sont observables ici. Pour changer la photo de l'avatar, clicker dessus.
   - Maintenant que vous êtes sur le form d'upload d'une image choississez l'image de Picsou (ou tout autre image à votre disposition). Sachez néanmoins qu'il y a une modification du format, les images de profil carrées sont donc recommandées. Clicker sur update.
   - Vous voilà de retour sur votre profil avec une merveilleuse image de Picsou (ou pas).


