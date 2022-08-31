import { createApp } from 'vue'
import { createPinia } from 'pinia'
// import Vuex from 'vuex'

import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"

import App from './App.vue'
import router from './router'

import './assets/main.css'

const app = createApp(App)

app.use(createPinia())
// app.use(Vuex)
app.use(router)

app.mount('#app')

