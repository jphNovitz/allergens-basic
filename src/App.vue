<template>
  <div id="app">
      <div class="container">
        <div class="row">
          <div class=" col-lg-12 text-center">
            <h1 class="d-inline">La Clémentine</h1>
            <h2 class="d-inline">Infos allergies</h2>
          </div>
            <messages  :isHidden="isHidden" />
        </div>
        
          
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <allergens @allergens="list=$event"/>
        </div>
         <div class="col-lg-8 col-md-12">
           
        <products :list="list" />
         </div>
      </div>
      
      </div>
      <div class="text-center">
        <h6>
          Sandwicherie <strong>La Clémentine</strong>, Chaussée Roosvelt 101B - 4420  Saint-Nicolas * <a href="mailto:info@laclementine.be">info@laclementine.be</a>
          <br />(2018) <a href="http://www.jphnovitz.be">jphNovitz</a>
        </h6>
      </div>
  </div>
</template>

<script>
import Allergens from './components/Allergens'
import Products from './components/Products'
import Messages from './components/Messages'

export default {
  name: 'App',
  components: {
    Allergens,
    Products,
    Messages
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
    return false
  }
}
}
</script>

<style>
</style>
