import Vue from 'vue';

import Router from 'vue-router';

Vue.use(Router);

import firstPage from './components/pages/myFirstVuePage'
import newRoutePage from './components/pages/newRoutePage'

const routes = [
    {
        path: '/my-new-vue-router',
        component : firstPage
    },
    {
        path: '/new-route',
        component: newRoutePage
    },
]


export default new Router({
    mode: 'history',
    routes
})
