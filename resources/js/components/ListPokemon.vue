<template>
    <div>
        <h1>Lista</h1>
        <select name="" id="">
            <option value="" v-for="{ name } in arrayPokemon" v-text="name"></option>
        </select>
    </div>
</template>

<script>
    export default {
    data() {
        return {
            arrayPokemon : []
        }
    },
    methods: {
        consultaPokemon() {
            axios.get('https://pokeapi.co/api/v2/pokemon')
            .then(response => {
                this.arrayPokemon = response.data.results
                console.table(this.arrayPokemon);
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
