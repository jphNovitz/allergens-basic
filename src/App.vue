<template>
  <div id="app">
      <div class="container">
        <div class="row">
      <h1 class="col-lg-12 text-center">La Clémentine</h1>
      <h2 class="col-lg-12 text-center">Infos allergies</h2>
      <div class="col-lg-12 breadcrumb">La Clémentine vous informe sur les allergies que peuvent provoquer ses produits. N'hésitez pas à demander une information ou nous signaler vos allergies alimentaires</div>
        </div>
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <allergens @allergens="list=$event"/>
        </div>
         <div class="col-lg-8 col-md-12">
            <div v-bind:class="{hide: isHidden}" class="alert alert-success">Les Pains et pâtes contenant du gluten peuvent être remplacés par 
              des produits sans gluten sur demande.
            </div>
        <products :list="list" />
         </div>
      </div>
      </div>
  </div>
</template>

<script>
import Allergens from './components/Allergens'
import Products from './components/Products'

export default {
  name: 'App',
  components: {
    Allergens,
    Products
  }
,
data () {
  return {
    list: []
  }
},
computed: {
  isHidden: function (){
    if (this.list.indexOf('Gluten') > -1){
      return false
    } else {
      return true
    }
  }
}
}
</script>

<style>
.hide{
  display: none;
}
</style>
