<template xmlns:v-slot="http://www.w3.org/1999/XSL/Transform">
  <div>
    <v-toolbar flat color="white">
      <v-toolbar-title>Płatki</v-toolbar-title>
      <v-divider
        class="mx-2"
        inset
        vertical
      ></v-divider>
      <v-spacer></v-spacer>
      <v-dialog v-model="dialog" max-width="500px">
        <!--<template v-slot:activator="{ on }">-->
          <!--<v-btn color="primary" dark class="mb-2" v-on="on">New Item</v-btn>-->
        <!--</template>-->
        <v-card>
          <v-card-title>
            <span class="headline">{{ formTitle }}</span>
          </v-card-title>

          <v-card-text>
            <v-container grid-list-md>
              <v-layout wrap>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="editedItem.name" label="Dessert name"></v-text-field>
                </v-flex>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="editedItem.calories" label="Calories"></v-text-field>
                </v-flex>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="editedItem.fat" label="Fat (g)"></v-text-field>
                </v-flex>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="editedItem.carbs" label="Carbs (g)"></v-text-field>
                </v-flex>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="editedItem.protein" label="Protein (g)"></v-text-field>
                </v-flex>

              </v-layout>
            </v-container>
          </v-card-text>

          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="blue darken-1" flat @click="close">Cancel</v-btn>
            <v-btn color="blue darken-1" flat @click="save">Save</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </v-toolbar>
    <v-data-table
      :headers="headers"
      :items="items"
      class="elevation-1"
    >
      <template v-slot:items="props">
        <td>{{ props.item.cerealName }}</td>
        <td class="text-xs-right">{{ props.item.id }}</td>
        <td class="text-xs-right">{{ props.item.manufacturer }}</td>
        <td class="text-xs-right">{{ props.item.type }}</td>
        <td class="text-xs-right">{{ props.item.calories }}</td>
        <td class="text-xs-right">{{ props.item.protein }}</td>
        <td class="text-xs-right">{{ props.item.fat }}</td>
        <td class="text-xs-right">{{ props.item.sodium }}</td>
        <td class="text-xs-right">{{ props.item.dietaryFiber }}</td>
        <td class="text-xs-right">{{ props.item.carbs }}</td>
        <td class="text-xs-right">{{ props.item.sugars }}</td>
        <td class="text-xs-right">{{ props.item.displayShelf }}</td>
        <td class="text-xs-right">{{ props.item.potasium }}</td>
        <td class="text-xs-right">{{ props.item.vitamins }}</td>
        <td class="text-xs-right">{{ props.item.serving }}</td>
        <td class="text-xs-right">{{ props.item.cups }}</td>
        <td class="justify-center layout px-0">
          <!--<v-icon-->
            <!--small-->
            <!--class="mr-2"-->
            <!--@click="editItem(props.item)"-->
          <!--&gt;-->
            <!--edit-->
          <!--</v-icon>-->
          <v-icon
            small
            @click="deleteItem(props.item.id)"
          >
            delete
          </v-icon>
        </td>
      </template>
      <template v-slot:no-data>
        <v-btn color="primary" @click="getCereals">Reset</v-btn>
      </template>
    </v-data-table>
  </div>
</template>

<script>
  export default {
    name: "Cereals",
    data: () => ({
      dialog: false,
      headers: [
        {text: 'Nazwa', align: 'left', sortable: false, value: 'name'},
        {text: 'id', align: 'left', sortable: false, value: 'id'},
        { text: 'Producent', value: 'calories' },
        { text: 'Typ', value: 'type' },
        { text: 'Kalorie', value: 'calories' },
        { text: 'Białko (g)', value: 'protein' },
        { text: 'Tłuszcz (g)', value: 'fat' },
        { text: 'Sód', value: 'sodium' },
        { text: 'Błonnik', value: 'dietaryFiber' },
        { text: 'Węglowodany (g)', value: 'carbs' },
        { text: 'Cukry', value: 'sugars', sortable: false },
        { text: 'Witaminy', value: 'vitamins', sortable: false },
        { text: 'Potas', value: 'potasium', sortable: false },
        { text: 'Pólka wystawowa', value: 'displayShelf', sortable: false },
        { text: 'Porcja', value: 'serving', sortable: false },
        { text: 'Kubki', value: 'cups', sortable: false },
      ],
      desserts: [],
      editedIndex: -1,
      editedItem: {},
      defaultItem: {},
      items:[]
    }),

    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
      }
    },

    watch: {
      dialog (val) {
        val || this.close()
      }
    },
    created () {
      this.getCereals()
    },

    methods: {
      getCereals() {
        this.$store.dispatch('cereal/Cereals').then(() => {
          this.items = this.$store.getters['cereal/GetCereal'];
        })
      },

      editItem (item) {
        this.editedIndex = this.desserts.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true
      },

      deleteItem (id) {
        if(confirm('Czy napewno chcesz usunąć ten element?')) {
          this.$store.dispatch('cereal/DeleteCereal',id).then(() => {
            this.items = this.$store.getters['cereal/GetCereal'];
          })
        }
      },

      close () {
        this.dialog = false
        setTimeout(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        }, 300)
      },

      save () {
        if (this.editedIndex > -1) {
          Object.assign(this.desserts[this.editedIndex], this.editedItem)
        } else {
          this.desserts.push(this.editedItem)
        }
        this.close()
      }
    }
  }
</script>

<style scoped>

</style>
