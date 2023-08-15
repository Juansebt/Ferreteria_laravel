<template>
    <hr>
    <div>
        <h1 class="text-center mt-4">
            POKEMÓN
        </h1>
        <div class="row m-5 text-center px-5">
            <List @imagen-pokemon="getImage"></List>
            <Image :imagePokemon="imagen"></Image>
        </div>
    </div>
    <br>
    <hr>
    <hr>
    <br>
    <div class="container">
        <h1 class="text-center">FOTO</h1>
        <form action="">
            <div>
                <label for="txtWidth" class="form-label">Ancho de la foto: </label>
                <input type="number" id="txtWidth" v-model="anchoFoto" class="form-control">
            </div>
            <br>
            <div>
                <label for="txtHeight" class="form-label">Alto de la foto: </label>
                <input type="number" id="txtHeight" v-model="altoFoto" class="form-control">
            </div>
            <br>
            <div class="form-check">
                <label for="" class="form-check-label">Agregar Grayscale</label>
                <input type="checkbox" v-model="agregarGrayscale" class="form-check-input">
            </div>
            <br>
            <div>
                <label for="" class="form-label">Agregar Blur: </label>
                <select v-model="agregarBlur" id="cbBlur" class="form-select">
                    <option value="">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <br>
            <div>
                <button @click="getFoto" type="button" class="btn btn-outline-primary" style="width: 100%;">Crear foto</button>
            </div>
        </form>
        <br>
        <Foto :imagenGenerada="miPic" v-if="miPic"></Foto>
    </div>
    <hr>
</template>
<script>
import axios from 'axios';
import List from '@/components/ListPokemon.vue'
import Image from '@/components/ImagePokemon.vue'
import Foto from '@/components/ImageFoto.vue'

export default {
    components: {
        List,
        Image,
        Foto
    },
    data() {
        return {
            imagen: '',
            anchoFoto: 0,
            altoFoto: 0,
            agregarGrayscale: false,
            agregarBlur: 0,
            miPic: ''
        }
    },
    methods: {
        getImage(data) {
            this.imagen = data
        },
        getFoto() {
            if (this.anchoFoto || this.altoFoto) {
                let url = `https://picsum.photos/${this.anchoFoto || this.altoFoto}/${this.altoFoto || this.anchoFoto}`;

                if (this.agregarGrayscale) {
                    url += '?grayscale';
                }
                if (this.agregarBlur > 0 && this.agregarBlur <= 10) {
                    url += this.agregarGrayscale ? `&blur=${this.agregarBlur}` : `?blur=${this.agregarBlur}`;
                }

                axios.get(url)
                    .then(res => {
                        this.miPic = res.config.url;
                    })
                    .catch(err => {
                        console.error(err);
                    });
            } else {
                alert('Por favor, ingresa valores para el ancho y el alto de la foto.');
            }
        }
    },
    mounted() {

    },
}
</script>