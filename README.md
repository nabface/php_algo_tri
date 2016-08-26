# Pair Programming : Les algorithmes de tri

Aujourd'hui, travaillez en [pair programming](https://fr.wikipedia.org/wiki/Programmation_en_bin%C3%B4me).
La personne qui rédige le code est appelée conducteur (driver). La seconde personne, appelée observateur (observer), assiste le conducteur en décelant les imperfections, en vérifiant que le code implémente correctement le design et en suggérant des alternatives de développement.

## Le tri bulle
###Principe
L'algorithme parcourt le tableau et compare les éléments adjacents. Lorsque les éléments ne sont pas dans l'ordre, ils sont échangés.

Après un premier parcours complet du tableau, le plus grand élément est forcément en fin de tableau, à sa position définitive. En effet, aussitôt que le plus grand élément est rencontré durant le parcours, il est mal trié par rapport à tous les éléments suivants, donc échangé à chaque fois jusqu'à la fin du parcours.

Après le premier parcours, le plus grand élément étant à sa position définitive, il n'a plus à être traité. Le reste du tableau est en revanche encore en désordre. Il faut donc le parcourir à nouveau, en s'arrêtant à l'avant-dernier élément. Après ce deuxième parcours, les deux plus grands éléments sont à leur position définitive. Il faut donc répéter les parcours du tableau, jusqu'à ce que les deux plus petits éléments soient placés à leur position définitive.

## Le tri par insertion
### Principe
Dans l'algorithme, on parcourt le tableau à trier du début à la fin. Au moment où on considère le i-ème élément, les éléments qui le précèdent sont déjà triés. Pour faire l'analogie avec l'exemple du jeu de cartes, lorsqu'on est à la i-ème étape du parcours, le i-ème élément est la carte saisie, les éléments précédents sont la main triée et les éléments suivants correspondent aux cartes encore mélangées sur la table.

L'objectif d'une étape est d'insérer le i-ème élément à sa place parmi ceux qui précèdent. Il faut pour cela trouver où l'élément doit être inséré en le comparant aux autres, puis décaler les éléments afin de pouvoir effectuer l'insertion. En pratique, ces deux actions sont fréquemment effectuées en une passe, qui consiste à faire « remonter » l'élément au fur et à mesure jusqu'à rencontrer un élément plus petit.

## Le tri par insertion dichotomique
### Principe.

Nous reprenons le même principe que le tri par insertion, c'est à dire

* prendre le premier élément de la partie non trié,
* le ranger dans la partie du tableau formé de la partie triée, augmentée de la place de cet élément.

Il suffit de répéter ces opérations avec le reste du tableau. La partie triée croît d'un élément à chaque itération, la partie non triée décroît d'un élément. Le tri s'arrête lorsque la partie non triée ne comporte qu'un seul élément.

Mais la recherche de la place d'un élément dans le tableau trié se fait par dichotomie.

Rappelons le principe :

Si le contenu d'un tableau est rangé par ordre croissant, il suffit de comparer la valeur cherchée avec l'élément situé au milieu du tableau :
* s'ils sont égaux, on a trouvé sa place.
* si la valeur cherchée est supérieure, elle se trouve dans la moitié supérieure.
* si la valeur cherchée est inférieure, elle se trouve dans la moitié inférieure.

On applique le même algorithme à la moitié du tableau restant, et ainsi de suite, jusqu'à ce que l'on ait trouvé la place de la valeur  	cherchée. 

## Bonus : Le tri Shell
Lisez la description de l'algo [ici](https://fr.wikipedia.org/wiki/Tri_de_Shell)

## Question
* Parmi tous ces tris, lesquels sont les plus efficaces.
