import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import cookie from 'vue-cookie'
import VueMasonry from 'vue-masonry-css'

Vue.config.productionTip = false;
Vue.use(cookie);
Vue.use(VueMasonry);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
