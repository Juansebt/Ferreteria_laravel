<template>
    <div>
        <img :src="imagenGenerada" alt="">
    </div>
</template>

<script>
    export default {
        props: {
            imagenGenerada: ''
        },
    }
</script>
