import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
import CheckInView from '../views/CheckIn/CheckInView.vue'
import checkInComp from '../components/checkin/checkInComp.vue'
import app from '../App.vue'
import login from '../views/auth/login.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'app',
      // component: app
    },
    {
      path: '/landing',
      name: 'landingview',
      component: LandingView
    },
    {
      path: '/checkin',
      name: 'checkin',
      component: CheckInView,
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      // component: () => import('../views/CheckIn/CheckInView.vue')
    },
    {
      path: '/checkincomp',
      name: 'checkincomp',
      component: checkInComp
    },
    {
      path: '/login',
      name: 'login',
      component: login
    }
  ]
})

export default router
