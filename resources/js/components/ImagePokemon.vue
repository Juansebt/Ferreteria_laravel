<template>
    <div>
        <h1>Imagen</h1>
        <img :src="imagePokemon" alt="">
        <p>{{ imagePokemon }}</p>
    </div>
</template>

<script>
    export default {
        props: {
            imagePokemon: ''
        },
    }
</script>
