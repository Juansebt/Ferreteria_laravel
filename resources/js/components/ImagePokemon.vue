<template>
    <div class="container col-6">
        <h1>Imagen</h1>
        <img :src="imagePokemon" class="mt-3 mb-3" style="height: 250px;">
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
