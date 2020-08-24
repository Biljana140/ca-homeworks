<template>

  <div class="about flex flex-col justify-content-center">
   <input type = "text" class = "bg-gray-500 px-4 py-2 " autocomplete ="off" v-model="city" @focus="modal = true">

  <div v-if="filteredCities && modal">
    <ul class="w-48 bg-dark-800 ">
      <li v-for="filteredCity in filteredCities" class="py-2 border-b cursor-pointer " style="max-width:50px  list-style-type:none" v-bind:key="filteredCity" @click="setCity(filteredCity)">{{ filteredCity }}</li>
    </ul>
  </div>
  </div>

</template>

<script>
export default {
  data: function () {
    return {
      city: '',
      modal: false,
      cities: [
        'Skopje', 'Strumica', 'Struga', 'Kocani', 'Debar', 'Tetovo', 'Kumanovo'],

      filteredCities: []

    }
  },

  mounted () {
    this.filterCities()
  },

  methods: {
    filterCities () {
      if (this.city.length === 0) {
        this.filteredCities = this.cities
      }

      this.filteredCities = this.cities.filter(city => {
        return city.toLowerCase().startsWith(this.city.toLowerCase())
      })
    },
    setCity (city) {
      this.city = city
      this.modal = false
    }
  },

  watch: {
    state () {
      this.filterCities()
    }
  }
}

</script>
