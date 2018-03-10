<template>
  <div class="allergens">
          <div v-for="allergen in allergens"  >
            <input type="checkbox" :id="allergen" :value="allergen" v-model="list" @change="sendAllergens" /> 
            <label :for="allergen">{{allergen}}</label>
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
        "Mollusque","Moutarde",
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
