import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
import CheckInView from '../views/CheckIn/CheckInView.vue'
import checkInComp from '../components/checkin/checkInComp.vue'
import app from '../App.vue'
import login from '../views/auth/login.vue'
import register from '../views/auth/register.vue'
import start from '../views/Start.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'app',
      component: start,
      meta: {
        requiresAuth:false
      }
    },
    {
      path: '/landing',
      name: 'landingview',
      component: LandingView,
      meta: {
        requiresAuth:true
      }
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
      component: login,
      meta: {
        requiresAuth:false
      }
    },
    {
      path: '/register',
      name: 'register',
      component: register,
      meta: {
        requiresAuth:false
      }
    },
    {
      path: '/start',
      name: 'start',
      component: start,
      meta: {
        requiresAuth:false
      }
    },
  ]
})


router.beforeEach((to, from) => {
  if(to.meta.requiresAuth && !localStorage.getItem('token')){
    return  {name:'login'}
  }
  if(to.meta.requiresAuth == false && localStorage.getItem('token')){
    return { name: 'landingview' }
  }
})

export default router
