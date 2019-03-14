<template>
  <div id="app">
      <v-layout row wrap>
        <v-flex xs3>
          <Navigation></Navigation>
        </v-flex>
        <v-flex xs9>
          <router-view></router-view>
        </v-flex>
      </v-layout>
  </div>
</template>

<script>

  import Navigation from './components/Navigation'

export default {
  name: 'App',
  components: {Navigation},
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
