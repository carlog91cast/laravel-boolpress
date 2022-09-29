import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import AboutPage from './pages/AboutPage';
import ContactPage from './pages/ContactPage';
import HomePage from './pages/HomePage';
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: HomePage
        },
        {
            path: '/about',
            name: 'about',
            component: AboutPage
        },
        {
            path: '/gallery',
            name: 'gallery',
            component: ContactPage
        },
    ]
})
export default router;