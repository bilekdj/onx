import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './components/Dashboard.vue';

Vue.use(VueRouter);

const routes = [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard,
    }
];

const router = new
