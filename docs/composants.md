## Les composants: 

Mon application Vue.js sera composée d'un composant 'app' principal qui utilisera d'autres composants.
Pour ce cas d'utilisation j'ai besoin:
* de la liste des produits ; 
* de la liste des allergies ; 
* afficher un message d'information.

```
<app>  
  <allergies>  
   -- allergies  (tableau)  
  <products>  
   -- products (json)    
  <messages> 
  ``` 

Il y aura trois composants: 
* allergies ;  
* products ;  
* messages.  

Chaque composant aura son fichier qui se divisera en trois partie:
* template
* script
* css  
  
### ```<template></template>```
Cette partie contiendra le code html qui sera injecté dans mon application.
### ```<script></script>```
Le code javascript sera entre les balises , c'est là que la magie opère.
Dans ce cas d'utilisation c'est ici que les variables représentant les allergies, les produits.
On utilisera des valeurs calculées, des methodes, des event listeners,
### ```<style></style>```

Chaque composant sera 'importé' dans le composant racine **App**

Expliquons le fonctionnement des composants [allergies](allergies.md) et [produits](produits.md)

