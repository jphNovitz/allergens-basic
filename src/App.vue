<template>
  <div id="app">
      <div class="container">
        <div class="row">
      <h1 class="col-lg-12 text-center">La Clémentine</h1>
      <h2 class="col-lg-12 text-center">Infos allergies</h2>
        </div>
      <div class="row">
        <div class="col-lg-4">
          <allergens @allergens="list=$event"/>
        </div>
         <div class="col-lg-8">
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
}
}
</script>

<style>

</style>
