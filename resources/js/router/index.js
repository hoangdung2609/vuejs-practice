import Vue from 'vue';
import Router from 'vue-router';

import Home from '../views/Home';
import WdRegister from '../views/Register';
import NotFound from  '../components/NotFound';

Vue.use(Router);

export default new Router({
    routes: [
        { path: '/', name: 'home', component: Home },
        { path: '/register', name: 'register', component: WdRegister }
    ],
    mode: 'history',
    path: '*', component: NotFound
});