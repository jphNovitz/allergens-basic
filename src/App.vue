<template>
  <div id="app">
      <div class="container">
        <div class="row">
      <h1 class="col-lg-12 text-center">La Clémentine</h1>
      <h2 class="text-center">Infos allergies</h2>
        </div>
      <div class="row">
    <allergens/>
      </div>
      </div>
  </div>
</template>

<script>
import Allergens from './components/Allergens'

export default {
  name: 'App',
  components: {
    Allergens
  }
}
</script>

<style>

</style>
