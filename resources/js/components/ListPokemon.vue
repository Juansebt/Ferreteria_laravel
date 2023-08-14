<template>
    <div>
        <h1>Lista</h1>
        <select name="" id="" @change="imagenPokemon" v-model="imgUrlPokemon">
            <option v-for="{ name, url } in arrayPokemon" v-text="name" :value="url"></option>
        </select>
        <button @click="enviar" style="margin-left: 5px;">Enviar</button>
    </div>
</template>

<script>
    export default {
    data() {
        return {
            arrayPokemon : [],
            imgUrlPokemon: '',
            imgArtWork: ''
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
        },
        async imagenPokemon() {
            axios.get(this.imgUrlPokemon)
            .then(res => {
                console.log(res)
                this.imgArtWork = res.data.sprites.other["official-artwork"].front_default
            })
            .catch(err => {
                console.error(err); 
            })
        },
        enviar() {
            this.$emit("image",this.imgArtWork)
        }
    },
    mounted() {
        this.consultaPokemon()
    },
    }
</script>
