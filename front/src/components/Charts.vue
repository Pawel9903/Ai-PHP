<template>
  <vue-frappe
    id="test"
    :labels="this.labels"
    title="Wykres wektora"
    type="axis-mixed"
    :height="300"
    :colors="['purple', '#ffa3ef', 'light-blue']"
    :dataSets="this.data">
  </vue-frappe>
</template>

<script>
    export default {
      name: "Charts",
      data() {
        return {
          labels:[
            1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20
          ],
          data:[
            {
              name: "Liczby występujące w Vektorze", chartType: 'bar',
              values: []
            }
            ]
        }
      },
      created(){
        this.getVectorsRepeat();
      },
      methods: {
        getVectorsRepeat() {
          this.$store.dispatch('vector/VectorRepeat').then(() => {
            this.data[0].values = this.$store.getters['vector/GetVectors'].vectorRepeat;
          })
        }
      }
    }
</script>

<style scoped>

</style>
