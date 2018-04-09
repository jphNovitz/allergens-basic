<template>
  <div class="col-lg-12 intro alert " :class="introClass">{{message}}</div>
</template>

<script>
export default {
  name: 'Messages',
  props: ['isHidden'],
  data () {
      return {
    generalClass: "alert-info",
    glutenClass: "alert-success",
    messageGeneral: "La Clémentine vous informe sur les allergies que peuvent provoquer ses produits. N'hésitez pas à demander une information ou nous signaler vos allergies alimentaires",
    messageGluten: "Les Pains et pâtes contenant du gluten peuvent être remplacés par des produits sans gluten sur demande.",
    message: '',
    introClass: ''
     
      }
  },
  mounted () {
      this.message = this.messageGeneral
      this.introClass = this.generalClass
  },
  watch: {
    isHidden: function (){
        if (this.isHidden === true){
            this.message = this.messageGeneral
            this.introClass = this.generalClass
          } else {
            this.message = this.messageGluten
            this.introClass = this.glutenClass
          }
    }  
  },
  computed: {}
}
</script>

<style>
    .intro{
        height: 6em ;
        margin-top: 1em;
        margin-bottom: 1em
    }
</style>
