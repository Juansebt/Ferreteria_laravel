<template>
    <h1>
        POKEMÓN
    </h1>
    <List></List>
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
            
        }
    },
    methods: {
        
    },
    mounted() {
        // this.consultaPokemon()
    },
}
</script>
<style>

</style>