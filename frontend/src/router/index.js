import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
import CheckInView from '../views/CheckIn/CheckInView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
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
    }
  ]
})

export default router
