<template>
<div class="flex flex-col items-center p-10 space-y-7 bg-green-200">

  <div class="flex flex-col w-1/3">
      <label for="company">Comune di provenienza</label>
      <input id="company" type="text" placeholder="inserire Comune" v-model="terreni.Comune" class="outline-none border-2 px-2 rounded-lg py-1">
  </div>

  <div class="flex flex-col w-1/3">
      <label for="foto">Foto </label>
      <input id="foto" type="text" placeholder="inserire foto" v-model="terreni.foto" class="outline-none border-2 px-2 rounded-lg py-1">
    </div>

    <div class="flex flex-col w-1/3">
      <label for="ral">Ettari</label>
      <input
      id="ral"
      type="number"
      placeholder="inserire dimensioni"
      v-model="terreni.ral"
      class="outline-none border-2 px-2 rounded-lg py-1">
  </div>

  <div class="flex flex-col w-1/3">
      <label for="exp">Foglio catastale</label>
      <input id="exp" type="text" placeholder="inserire foglio" v-model="terreni.experience" class="outline-none border-2 px-2 rounded-lg py-1">
  </div>

  <div class="flex flex-col w-1/3">
      <label for="lang">Terreno</label>
      <select name="" id="lang" class="outline-none border-2 px-2 rounded-lg py-1 bg-white" v-model="terreni.Terreno">
        <option value="Argilloso">Argilloso</option>
        <option value="Sabbioso">Sabbioso</option>
        <option value="Argilloso">Ghiaioso</option>
        <option value="Sabbioso">Tufo</option>
      </select>
    </div>

    <div class="flex flex-col w-1/3">
    <label for="loc">Irrigazione</label>
      <select
      name=""
      id="lang"
      class="outline-none border-2 px-2 rounded-lg py-1 bg-white"
      v-model="terreni.location">

          <option value="scorrimento">A scorrimento</option>
          <option value="pozzo">Pozzo</option>
          <option value="canale">Canale</option>
          <option value="senza acqua">Senza acqua</option>
        </select>
  </div>

  <div class="flex flex-col w-1/3">
      <label for="lang">Offerta</label>
      <select name="" id="lang" class="outline-none border-2 px-2 rounded-lg py-1 bg-white" v-model="terreni.Terreno">
        <option value="Vendita">Vendita</option>
        <option value="Affitto">Affitto</option>
        <option value="Affido gratuito">Affido gratuito</option>
      </select>
    </div>

    <div class="flex flex-col w-1/3">
      <label for="exp">Offerta</label>
      <input id="exp" type="text" placeholder="inserire offerta" v-model="terreni.experience" class="outline-none border-2 px-2 rounded-lg py-1">
  </div>


  <div class=" flex justify-center w-1/3">
    <button class="bg-violet-500 px-4 py-2 rounded-lg text-white hover:bg-pink-300" @click="create()">Crea</button>
  </div>

</div>
</template>

<script>
export default {
    name:'create',

    data (){
        return{
            terreni: {},
            isEdit: false
        }
    },

    async mounted() {
        if(this.$route.name == 'edit'){
          this.isEdit = true
        }

        if(this.isEdit){
          this.terreni = (await this.$axios.get('http://localhost:8000/api/terrenis/' + this.$route.params.id)).data
        }
    },
    
    methods: {
      async create(){
        if(! this.isEdit){
          await this.$axios.post('http://localhost:8000/api/terrenis', this.terreni)
        this.$router.push({
          name:'home'
        })
        }
        else {
          await this.$axios.put('http://localhost:8000/api/terrenis/edit/' + this.$route.params.id, this.terreni)
          this.$router.push({
            name: 'home'
          })
        }
      }
    },
};
</script>