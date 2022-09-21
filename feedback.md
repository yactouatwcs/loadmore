# feedback

⚠️ je n'ai pas pu tester l'application parce que je n'ai aucune indication pour créer les tables et je n'ai pas non plus de données de test...

## README

- le README doit contenir toutes les étapes d'installation du projet depuis le clone (notamment ce qu'il faut faire pour installer la base de données et les tables de cette base de données)
- lors de la 1ère mise en oeuvre du projet, il faut aussi fournir à l'utilisateur un fichier SQL qui va permettre de `seed` la base de données, c'est à dire créer les tables, insérer des données de test, etc.

## `function.php`

- il faut prévoir d'afficher quelque chose à l'utilisateur (un feedback d'erreur) si la connection à la BDD se passe mal, on peut déterminer un comportement en cas d'erreur avec un [try/catch](https://www.php.net/manual/fr/language.exceptions.php)
- pour éviter des problèmes de connection éventuels, par exemple si on utilise Docker, utiliser `127.0.0.1` plutôt que `localhost`
