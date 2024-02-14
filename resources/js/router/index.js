import { createRouter, createWebHistory } from 'vue-router'
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'index',
            component: () => import('../views/index.vue')
        },
        {
            path: '/product',
            name: 'product',
            component: () => import('../views/product.vue')
        },
    ]
})

export default router
