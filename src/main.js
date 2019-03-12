import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import cookie from 'vue-cookie';

Vue.config.productionTip = false
Vue.use(cookie);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
