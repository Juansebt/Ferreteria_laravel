<template>
    <h1>
        POKEMÓN
    </h1>
    <List @getImage="image"></List>
    <Image></Image>
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
            image: '',
        }
    },
    methods: {
        getImage(data) {
            this.image = data
        }
    },
    mounted() {
        
    },
}
</script>
<style>

</style>