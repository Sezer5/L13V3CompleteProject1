import { createRouter, createWebHistory } from 'vue-router'

const Home = () => import('@/components/Home.vue')
const Login = () => import('@/components/Login.vue')
const Register = () => import('@/components/Register.vue')
const Product = () => import('@/components/product/Product.vue')
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
    },
    {
      path: '/register',
      name: 'register',
      component: Register,
    },
    {
      path: '/product/:slug',
      name: 'product',
      component: Product,
    },
    
  ],
})

export default router
