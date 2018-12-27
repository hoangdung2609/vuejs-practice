require('./bootstrap')

window.Vue = require('vue')

import 'material-design-icons-iconfont/dist/material-design-icons.css'
import App from './App.vue'
import router from "./router"
import Vuetify from 'vuetify'

Vue.use(Vuetify, {
    iconfont: 'mdi' // 'md' || 'mdi' || 'fa' || 'fa4'
})

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});