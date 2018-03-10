<template>
    <div class="products col-lg-8" id="filtered-list">
    
        <div class="background-transparent">
          <ul>
            <li v-for="product in filtered" class="alert alert-danger">{{product.name}}</li>
          </ul>
        </div>
      </div> <!-- / col-8-->
</template>

<script>
export default {
  name: 'Products',
  props: ['list'],
  data () {
    return {
      products: [
        {name: "Salade Composée", allergens: ["Graines de Sésame", "Arachides"]},
        {name: "Coeur de Clem", allergens: ["Gluten", "Graines de Sésame"]},
        {name: "Le Tonata", allergens: ["Oeufs", "Graines de Sésame", "Gluten","Poisson"]},
        {name: "Le Célèbre Dago", allergens: ["Oeufs", "Graines de Sésame", "Gluten", "Lait"]},
        {name: "Le Pain de viande", allergens: ["Oeufs", "Gluten", "Arachide"]},
        {name: "Le Fish", allergens: ["Poisson", "Gluten", "Lait"]},
        {name: "Le Seguin", allergens: ["Gluten", "Lait", "Arachide"]},
        {name: "Le Poulet Cocktail", allergens: ["Oeufs", "Gluten"]},
        {name: "Le Poulet basilic", allergens: ["Oeufs", "Gluten"]},
        {name: "Le Poulet chorizo", allergens: ["Oeufs", "Gluten"]},
        {name: "Le Thon piquant maison", allergens: ["Oeufs", "Gluten", "Poisson"]},
        {name: "Le Thon Mayo Maison", allergens: ["Oeufs", "Gluten", "Poisson"]},
        {name: "Fromage", allergens: ["Lait", "Gluten"]},
        {name: "Le Jambon Beurre", allergens: ["Gluten"]},
        {name: "Le Veggie", allergens: ["Gluten"]},
        {name: "Le Detox", allergens: ["Gluten"]},
        {name: "Le Panini Maison", allergens: ["Poisson", "Gluten"]},
        {name: "Le Panini Prosciuto", allergens: ["Lait", "Gluten"]},
        {name: "Le Panini Poulet", allergens: ["Gluten"]},
        {name: "Pâtes Bolo", allergens: ["Gluten"]},
        {name: "Pâtes 4 fromages", allergens: ["Lait", "Gluten"]},
        {name: "La soupe du jout - Celeri / Poireaux", allergens: ["Céleri"]},
        {name: "La soupe du jout - Carotte", allergens: []},
        {name: "Le Croque-Monsieur", allergens: ["Lait", "Gluten"]},
        {name: "Le New-Yorkais", allergens: ["Oeufs", "Gluten"]},
      ]
    }
  },computed: {
    filtered: function(){
        var products = this.products
        var test = null
        var got = []
        
        if(this.list){
            var list= this.list
            products.map(function (product){
                let allergens = product.allergens
                test = allergens.filter(function(allergen){
                    return (list.indexOf(allergen) > -1)
                })
                if(test.length>0){
                got.push(product)
                }
            })
        
        }
        return got
        
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.products{
      padding: 2em 0;
      height: 70vh;
      min-height: 70vh;
}

h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  /*display: inline-block;*/
  margin: 0 10px;
}
a {
  color: #42b983;
}
.inline{
  display: inline-flex;
}
.checkbox-wrapper {
  position: relative;
  top: -1px;
}
#filtered-list{
  background-image: url(logo-clem_00.png);
  background-repeat: no-repeat;
  background-size: 40vw;
  background-position: center;

}
.background-transparent{
  background-color: rgba(255,255,255,.7);
  width: 100%;
  height: 100%;
}
</style>
