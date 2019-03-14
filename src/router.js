import Vue from 'vue'
import Router from 'vue-router'
import GeneralPage from './components/pages/GeneralPage';
import Error404 from './components/pages/Error404';

Vue.use(Router)

export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        { path: '/', component: GeneralPage },
        { path: '*', component: Error404 }
    ]
})
