# Démineur

Fait travailler :   (ex :boucles, conditions, POO...)
conditions
doubles boucles
POO (getter, setter, construct)

Enoncé du Dojo :
	Une grille de démineur de taille variable (sous forme de tableaux) est envoyée en paramètre à une classe Demineur. Sur cette grille, les 0 sont des cases vides, les 1 correspondent à des bombes.

Une méthode tryCase($x,$y) permet de tester une case de la grille d’après ses coordonnées. Le retour de la méthode doit être “boom” si ça tombe sur une bombe, le nombre de bombes adjacente sinon. Une erreur doit être retournée si les coordonnées sont en dehors de la taille de la grille)

Exemples : 

```php
	Exemple d’une grille de 4x3
[
	[0,0,0,1],
	[0,1,0,1],
	[1,0,0,0],
]
```
si l’on souhaite tester la case 3,2 (en vert), le retour doit être 3 (il y a en effet 3 bombes autour, diagonales comprises)
si l’on souhaite tester la case 1,3 (en rouge), le retour doit être “boom” car nous sommes sur une bombe
Remarque : au choix on peut commencer à compter les coordonnées à partir de 1 ou de 0 (ce qui peut se révéler plus simple pour le parcours des tableaux)
