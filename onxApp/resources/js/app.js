// import Vue from 'vue';
// import VueRouter from 'vue-router';
// import App from './components/App.vue';
//
// Vue.use(VueRouter);
//
// const router = new VueRouter({
//     mode: 'history',
//     routes: [
//         { path: '/', component: App }
//     ]
// });
//
// const app = new Vue({
//     el: '#app',
//     router,
//     render: h => h(App)
// });


//
// require('./bootstrap');
//
// import {createApp} from 'vue'
//
// import App from './components/dashboard.vue'
//
// createApp(App).mount("#app")


// require('./bootstrap');
//
// window.Vue = require('vue').default;
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// const app = new Vue({
//     el: '#app',
// });

----
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Dashboard from './components/Dashboard.vue';
import Customers from './components/Customers.vue';
import CustomerCreate from './components/CustomerCreate.vue';
import CustomerEdit from './components/CustomerEdit.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/customers',
            name: 'customers',
            component: Customers
        },
        {
            path: '/customers/create',
            name: 'customerCreate',
            component: CustomerCreate
        },
        {
            path: '/customers/:id/edit',
            name: 'customerEdit',
            component: CustomerEdit
        }
    ]
});

const app = new Vue({
    el: '#app',
    router: router,
});


//
// import {createApp} from 'vue'
// import App from './components/dashboard.vue'
//
// const app = createApp({})
//
// app.component('dashboard', App);
// app.mount('#app')
//
// // createApp(App).mount("#app")
