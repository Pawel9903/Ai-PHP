import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/Home'
import Charts from '../components/Charts'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home,
    },
    {
      path: '/vectors/repeat',
      name: 'VectorsRepeat',
      component: Charts,
    }
  ]
})
