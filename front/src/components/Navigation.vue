<template>
  <v-navigation-drawer permanent>
    <v-toolbar flat>
      <v-list>
        <v-list-tile>
          <v-list-tile-title class="title">
            Sztuczna inteligencja
          </v-list-tile-title>
        </v-list-tile>
      </v-list>
    </v-toolbar>

    <v-divider></v-divider>

    <v-list dense class="pt-0">
      <v-list-tile
        v-for="item in items"
        :to="item.link"
        @click=""
      >
        <v-list-tile-action>
          <v-icon>{{ item.icon }}</v-icon>
        </v-list-tile-action>

        <v-list-tile-content>
          <v-list-tile-title>{{ item.name }}</v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
    </v-list>
  </v-navigation-drawer>
</template>


<script>
  export default {
    name:'Navigation',
    data () {
      return {
        items: [
          { link: '/', icon: 'dashboard', name: 'Strona głowna' },
          { link: '/vectors/repeat', icon: 'dashboard', name: 'Zadanie 6' },
        ],
        right: null
      }
    }
  }
</script>

<style scoped>

</style>
