import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import { createRouter, createMemoryHistory } from 'vue-router'
import 'bootstrap/dist/js/bootstrap.min.js'
import "bootstrap/dist/css/bootstrap.min.css";

import App from '@/pages/App.vue'
import Saludar from '@/pages/Saludar.vue'

const routes = [
    {
        path: '/app',
        component: App,
    },
    {
        path: '/saludar',
        component: Saludar,
    }
]

const router = createRouter({
    history: createMemoryHistory(),
    routes,
})

const app = createApp({})
app.use(router)
app.mount('#app')

// createApp(App).mount('#app')
