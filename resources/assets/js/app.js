import Vue from 'vue';
import VueRouter from 'vue-router';

import App from '../components/App.vue';
import Home from '../components/Home.vue';

Vue.use(VueRouter);

export var router = new VueRouter

router.map({
    '/': {
        name: 'home',
        component: Home
    }
});

router.start(App, '#app');
