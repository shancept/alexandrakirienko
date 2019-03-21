import Vue from 'vue'
import Router from 'vue-router'
import GeneralPage from './components/pages/GeneralPage';
import Error404 from './components/pages/Error404';
import WeddingPage from './components/pages/WeddingPage';
import Biography from './components/pages/Biography';

Vue.use(Router)

export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        { path: '/', component: GeneralPage },
        { path: '*', component: Error404 },
        { path: '/wedding', component: WeddingPage },
        { path: '/biography', component: Biography }
    ]
})
