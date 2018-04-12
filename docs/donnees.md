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

###Message
* une variable *messageGeneral* affichera  "La Clémentine vous informe sur les allergies que peuvent provoquer ses produits. N'hésitez pas à demander une information ou nous signaler vos allergies alimentaires" dans la majorité du temps.
* *messageGluten* contient "Les Pains et pâtes contenant du gluten peuvent être remplacés par des produits sans gluten sur demande." et sera utilisé lorque l'allergie *gluten* est sélectionnée.  

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
