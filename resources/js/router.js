import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import AboutPage from './pages/AboutPage';
import ContactPage from './pages/ContactPage';
import HomePage from './pages/HomePage';
import TagsPage from './pages/TagsPage';
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
            path: '/contact',
            name: 'contact',
            component: ContactPage
        },
        {
            path: '/tags',
            name: 'TagsPage',
            component: TagsPage
        },
    ]
})
export default router;