import Vue from 'vue'
import Router from 'vue-router'
import GeneralPage from './components/pages/GeneralPage';
import Error404 from './components/pages/Error404';
import WeddingPage from './components/pages/WeddingPage';
import Biography from './components/pages/Biography';
import MakeupBasic from './components/pages/courses/MakeupBasic';
import McArhitect from './components/pages/courses/McArhitect';
import MakeupForYourself from './components/pages/courses/MakeupForYourself';


Vue.use(Router)

export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        { path: '/', component: GeneralPage },
        { path: '/wedding', component: WeddingPage },
        { path: '/biography', component: Biography },

        { path: '/portfolio', component: GeneralPage },
        { path: '/beauty-academy', component: GeneralPage },
        { path: '/integration', component: GeneralPage },
        { path: '/feedback', component: GeneralPage },

        { path: '/courses/makeup-basic', component: MakeupBasic },
        { path: '/courses/mc-arhitect', component: McArhitect },
        { path: '/courses/makeup-for-yourself', component: MakeupForYourself },
        { path: '*', component: Error404 },
    ],
    scrollBehavior () {
        return { x: 0, y: 0 }
    }
})
