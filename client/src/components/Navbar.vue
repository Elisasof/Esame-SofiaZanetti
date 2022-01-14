<template>
  <div class="bg-indigo-400 flex h-16 items-center justify-center">
    <div v-for="link in navLinks" :key="link.code" @click="goToLink(link)"
    :class="{
      'text-black' : link.code != currentRoute, //con quest,quando sono nella pagina il titolo si evidenzia(è collegato col computed sotto)
      'text-white' : link.code == currentRoute
      }"
      class="mx-10">

      {{link.label}}
    </div>
  </div>
</template>

<script>
export default {
    data() {
      return {
        navLinks: [
          {
            code: 'home',
            label: 'Banca della Terra'
          },
          {
            code: 'create',
            label: 'Nuovi Terreni'
          },
        ]
      }
    },

    computed: {
      currentRoute() {
        return this.$route.matched[0].name;
      }
    },

    methods: {
      goToLink(link) {
        this.$router.push({
          name: link.code
        })
      }
    }
}
</script>