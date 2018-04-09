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


#information allergène

##Objectif
L'objectif est de proposer une application vue.js qui affiche les différentes allergies alimentaires.  Lorsque l'on sélectionne une allergie, la page affiche en vis-à-vis la liste des produits succeptibles de provoquer ces allergies.

##Composants
Mon application Vue.js sera composée d'un composant 'app' principal qui utilisera d'autres composants.
Pour ce cas d'utilisation j'ai besoin:
* de la liste des produits ; 
* de la liste des allergies ; 
* afficher un message d'information.

Je n'ai besoin que de cela deux composants: un pour les allergies et un pour les produits.

##Représentation des données
Pour démarrer rapidement, faisons simple un objet Json qui permet de stocker ce dont j'ai besoin.  Pas de problème de taille, je n'aurais que 14 allergies et à peine un peu plus de produits.

<app>  
  <allergies>  
   -- allergies  (json)
  <products>
   -- products (json)  
  <messages>

##Allergies
Les allergies sont au nombre de 14 :
* Céleri
* Oeufs
* Gluten
* Crustacés
* Poisson
* Lupin
* Mollusque
* Moutarde
* Fruit à coque
* Arachides
* Graines de Sésame
* Sulfites
* Soja

##Produits  
* Salade Composée
* Coeur de Clem
* Le Tonata
* Le Célèbre Dago
* Le Pain de viande
* Le Fish
* Le Seguin
* Le Poulet Cocktail
* Le Poulet basilic
* Le Poulet chorizo
* Le Thon piquant maison
* Le Thon Mayo Maison
* Fromage
* Le Jambon Beurre
* Le Veggie
* Le Detox
* Le Panini Maison
* Le Panini Prosciuto
* Le Panini Poulet
* Pâtes Bolo
* Pâtes 4 fromages
* La soupe du jour - Celeri / Poireaux
* La soupe du jour - Carotte
* Le Croque-Monsieur
* Le New-Yorkais
* Le Burger




[liens](sources.md) 