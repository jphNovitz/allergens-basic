# Allergen Basic 
**Ce projet est une simple page qui affiche une liste d'allergies, lorsque l'on clique sur une allergie l'affichage est modifié pour afficher les produits (sandwiches et potages) qui provoquent les allergies sélectionnées. L'objectif est d'apporter une information au consommateur**

  
[Depôt Github: ](https://github.com/jphNovitz/allergens-basic)  
[Demo: ](http://demos.jphnovitz.be/allergenes-basic)  
[Lien vers cette page: ](https://jphnovitz.github.io/allergens-basic/)  

## Technologie utilisée
Le language utilisé est Vue.js un framework javascript qui permet de modifier un affichage en temps réel sans rechargement de la page un peu à la manière de Angular ou react.

## Les données 
### Les allergies:
Les allergies sont au nombre de 14:
* Céleri ;
* Oeufs ;
* Gluten ;
* Crustacés ;
* Poisson ;
* Lupin ;
* Mollusque ;
* Moutarde ;
* Fruit à coque ;
* Arachides ;
* Graines de Sésame ;
* Sulfites ;
* Soja ; 
  
### les produits:
* **Salade Composée** provoque les allergie(s): *Graines de Sésame, Arachides* ;
* **Coeur de Clem** provoque les allergie(s): *Gluten, Graines de Sésame* ;
* **Le Tonata** provoque les allergie(s): *Oeufs, Graines de Sésame, Gluten, Poisson* ;
* **Le Célèbre Dago** provoque les allergie(s): *Oeufs, Graines de Sésame, Gluten, Lait* ;
* **Le Pain de viande** provoque les allergie(s): *Oeufs, Gluten, Arachide* ;
* **Le Fish** provoque les allergie(s): *Poisson, Gluten, Lait* ;
* **Le Seguin** provoque les allergie(s): *Gluten, Lait, Arachide* ;
* **Le Poulet** Cocktail provoque les allergie(s): *Oeufs, Gluten* ;
* **Le Poulet** basilic provoque les allergie(s): *Oeufs, Gluten* ;
* **Le Poulet** chorizo provoque les allergie(s): *Oeufs, Gluten* ;
* **Le Thon piquant maison** provoque les allergie(s): *Oeufs, Gluten, Poisson* ;
* **Le Thon Mayo Maison** provoque les allergie(s): *Oeufs, Gluten, Poisson* ;
* **Fromage provoque** les allergie(s): *Lait, Gluten* ;
* **Le Jambon Beurre** provoque les allergie(s): *Gluten* ; 
* **Le Veggie** provoque les allergie(s): *Gluten* ;
* **Le Detox** provoque les allergie(s): *Gluten* ;
* **Le Panini Maison** provoque les allergie(s): *Poisson, Gluten* ;
* **Le Panini Prosciuto** provoque les allergie(s): *Lait, Gluten* ;
* **Le Panini Poulet** provoque les allergie(s): *Gluten* ;
* **Pâtes Bolo** provoque les allergie(s): *Gluten* ;
* **Pâtes 4 fromages** provoque les allergie(s): *Lait, Gluten* ;
* **La soupe du jour - Celeri / Poireaux** provoque les allergie(s): *Céleri* ;
* **La soupe du jour - Carotte**
* **Le Croque-Monsieur** provoque les allergie(s): *Lait, Gluten* ;
* **Le New-Yorkais** provoque les allergie(s): *Oeufs, Gluten* ;

### Représentation des données
Dans ce cas d'utilisation la représentation des données est assez simple: 
Les allergies peuvent être représentées par un simple tableau:   
``` 
allergens: ["Céleri", "Oeufs", "Gluten", "Crustacés", "Poisson", "Lupin", "Mollusque","Moutarde",
        "Fruit à coque", "Arachides", "Graines de Sésame", "Sulfites", "Soja", ] 
```  

La représentation des produits sera à peine plus complexe: un tableau d'objets. Chaque objet contiendra deux propriétés: le nom du produits et un tableau d'allergies.
```
products: [
        {name: "Salade Composée", allergens: ["Graines de Sésame", "Arachides"]},
        {name: "Coeur de Clem", allergens: ["Gluten", "Graines de Sésame"]},
        {name: "Le Tonata", allergens: ["Oeufs", "Graines de Sésame", "Gluten","Poisson"]}] 
```


### Les Composants
Le projet Vus.js se compose d'un élément principal 'app'. c'est ce qui est injecté dans le 
```<div id="app">```.  Je pourrait travailler dans ce cadre mais l'application pourrait rapidement devenir lourde.  Tout l'intéret d'utiliser ce framework est la modularité: je vais diviser mon application en divers modules qui vont communiquer entre eux.  
  
Deux composants sont nécéssaires: 
* <allergens> s'occupera d'afficher les différentes allergies et signalera à son parent quelle est la sélection d'allergies ;
* <products> Cet élément contiendra la liste d'objets représentant les produits, quand il recoit du parent une liste d'allergies, il sélectionne les produits qui sont liés et le renvoi au parent.



[liens](sources.md) 