<template>
  <div class="allergens inline">
    <div class="col-lg-12  text-left">
        <div class="">
          <div v-for="allergen in allergens"  >
            <input type="checkbox" :id="allergen" :value="allergen" v-model="list" class="" >
            <label :for="allergen">{{allergen}}</label>
          </div>
        </div>
    </div>  <!-- col 2-->
      <div class="col-lg-7">
        <ul>
          <li v-for="product in filtered">{{product.name}}</li>
        </ul>
      </div> <!-- / col-10-->
  </div> <!-- / allergnes-->
</template>

<script>
export default {
  name: 'Allergens',
  data () {
    return {
      allergens: [
        "Céleri",
        "Oeufs",
        "Gluten",
        "Crustacés",
        "Poisson",
         "Lupin",
        "Mollusque","Moutarde",
        "Fruit à coque",
        "Arachides",
        "Graines de Sésame",
        "Sulfites",
        "Soja",
      ],
      list: []
    }
  },computed: {
    filtered: function(){
      /*return this.products.filter(p => this.list.indexOf(p.allergens) === -1)*/
      var list= this.list
      var products = this.products
      var test = null
      var got = []
      products.map(function (product){
        let allergens = product.allergens
       console.log("*************"+list)
       console.log("---------"+allergens) 
        test = allergens.filter(function(allergen){
          return (list.indexOf(allergen) > -1)
        })
        if(test.length>0){
          got.push(product)
        }
       
               

      })
      return got
    }
}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>


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

</style>
