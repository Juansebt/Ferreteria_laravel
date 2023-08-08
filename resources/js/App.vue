<template>
    <div>
        <h1>Hola mundo</h1>
        <!-- <h3>{{nombre}}</h3>
        <h3>{{edad}}</h3> -->
        <input type="text" v-model="nombre">
        <input type="number" v-model="edad">
        <h3 v-text="nombre"></h3>
        <h3 v-text="edad"></h3>
        <p v-if="edad>=18">
            Mayor de edad
        </p>
        <p v-else>
            Menor de edad
        </p>
    </div>
    <span v-text="info"></span>
    <button v-on:click="consultaPokemon">Verificar</button>
    <ul>
        <li v-for="pokemon in arrayPokemon" v-text="pokemon.name"></li>
    </ul>
</template>
<script>
import axios from 'axios'

export default {
    data() {
        return {
            nombre: '',
            edad: 0,
            info: '',
            arrayPokemon: [],
        }
    },
    methods: {
        consultaPokemon() {
            axios.get('https://pokeapi.co/api/v2/pokemon')
            .then(response => {
                this.arrayPokemon = response.data.results
                console.log(this.arrayPokemon);
            })
            .catch(error => {
                console.log(error);
            })
        }
    },
    mounted() {
        this.consultaPokemon()
    },
}
</script>
<style>

</style>