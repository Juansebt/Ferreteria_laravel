<template>
    <h1>
        POKEMÓN
    </h1>
    <List @imagen-pokemon="getImage"></List>
    <Image :imagePokemon="imagen"></Image>
</template>
<script>
import List from '@/components/ListPokemon.vue'
import Image from '@/components/ImagePokemon.vue'

export default {
    components: {
        List,
        Image
    },
    data() {
        return {
            imagen: '',
        }
    },
    methods: {
        getImage(data) {
            this.imagen = data
        }
    },
    mounted() {
        
    },
}
</script>
<style>

</style>