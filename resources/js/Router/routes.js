
import {createWebHistory,createRouter} from 'vue-router';

import Home from '../components/HomeComponent.vue';
import Register from '../components/Auth/RegistrationComponent.vue';
import Login from '../components/Auth/LoginComponent.vue';
import ForgotPassword from '../components/Auth/ForgotPasswordComponent.vue';

const routes = [
    {
        path: '/',
        component: Home,
        name: 'home'
    },
    {
        path: '/login',
        component: Login,
        name: 'login'
    },
    {
        path: '/register',
        component: Register,
        name: 'register'
    },
    {
        path: '/forgot-password',
        component: ForgotPassword,
        name: 'forgot-password'
    }
]
const router = createRouter({
    history: createWebHistory(),
    mode: 'hash',
    routes
})

export default router;
