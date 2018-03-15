<!-- Project: allergens-basic            -->
<!-- Author: Novitz Jean-Philippe        -->
<!-- Github: http://github.com/jphNovitz -->

<template>
  <div class="row">
          <div class="col-6 col-md-4 col-lg-12 border" v-for="allergen in allergens"  >
              <div 
                   :class="setClass(allergen)"
                   @click="updateList(allergen)" >
                   {{allergen}}
              </div>
            <!--  <input type="checkbox" :id="allergen" :value="allergen" v-model="list" @change="sendAllergens" /> 
              <label :for="allergen">{{allergen}}</label> -->
          </div>
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
        "Mollusque",
        "Moutarde",
        "Fruit à coque",
        "Arachides",
        "Graines de Sésame",
        "Sulfites",
        "Soja",
      ],
      list: []
    }
  },
  methods: {
    sendAllergens: function () {
      this.$emit("allergens", this.list)
    },
    updateList: function (allergen) {
      let indice = this.list.indexOf(allergen)
      if (indice  === -1){
        this.list.push(allergen)
      } else {
        this.list.splice(indice,1)
      }
    },
    setClass: function (allergen){
      if (this.list.indexOf(allergen) > -1){
        return "bg-active"
      } else {
        return 'bg-inactive'
      }

    }
  },
  watch: {
    list: function(){
      this.sendAllergens()
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.border{
      border: solid 1px rgba(206,206,206,.2);
      padding: 0;
    
}
.border:hover{
  cursor: pointer;
}

.bg-active{
  background-color: #FEEED5;
}

.bg-inactive{
  background-color: #fff;
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

</style>
