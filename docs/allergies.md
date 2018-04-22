## Composant *Allergies*

Ce composant s'occupe de deux choses: 
* Il affiche la liste des allergies
* il envoie un signal (un event) à son parent pour dire:
  * on a ajouté une allergie, voici ma liste mise à jour ;
  * on a enlevé une allerie, voici ma nouvelle liste.


Comment procéder ?  

Un *template* html avec un div particulier:
```vue
<div 
    :class="setClass(allergen)"
    @click="updateList(allergen)" >
    {{allergen}}
</div>
```
{{ }} est le moyen pour vue d'afficher une valeur, logiquement ```{{allergen}}``` va afficher l'allergène courant.   
  
``` :class="setClass(allergen) ``` est une liaison de classe, c'est à dire que, un peu plus bas j'ai écris une petite fonction qui regare si l'allergie courante est dans la liste des allergies. En fonction de *oui* ou *non* je vais appliquer appliquer une classe differente (un fond orange si l'allergie est sélectionnée).
  ```vue
  setClass: function (allergen){
      if (this.list.indexOf(allergen) > -1){
        return "bg-active"
      } else {
        return 'bg-inactive'
}
```

pour 'détecter' si l'élément fait partie de la liste j'utilisa la fonction [indexOf](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/indexOf).  
Cette fonction javascript va reagarder à quel endroit ma chaine de caractère se trouve dans le tableau que je lui passe.  
S'il ne le trouve pas il renvoie la valeur -1.  Je me base sur la valeur retournée pour faire le test.  
  
Un élélent *watch* va surveiller des changement dans la liste.  A chaque changement il va appeler la méthode *sendAllergens()*.  Cette méthode va 'émettre' la liste mise à jour.  c'est une sorte de message qui sera capté par le parent (App).  
``` this.$emit("allergens", this.list) ``` est l'instruction qui va être utilisé pour émettre.  


  
De son côté l'élément parent (App) écoute via 
```
<allergens @allergens="list=$event"/>
```
ce que *allergens* envoie et le transmet au composant Product via une [props](https://fr.vuejs.org/v2/guide/components.html#Passer-des-donnees-avec-props).  Une props est une variable transmise au composant enfant.  