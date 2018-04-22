## Composant *Produits*  

Ce composant est appelé par **App**, il reçoit une liste d'allergie via 'props'.  

Pour le composant, *props* est une valeur qui peut être de tout type (chaîne, entier, objet ou tableau).  

Ce composant contient deux variables: 
* la liste des allergies (props)
* la liste des produits (data)

Il existe également une propriété calculée (computed) qui est en fait une fonction qui utilise des variable pour faire un traitement et qui renvoie une valeur.  le ```<template></template>``` utilisera cette valeur pour l'affichage la valeur, celle information sera dynamique c'est à dire que dès qu'une data changera la fonction modifiera la valeur inclue dans le template.