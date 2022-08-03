import vueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(vueRouter);

import Index from './views/Index';
import Users from './views/user/UserHome';
import UserEdit from './views/user/UserEdit';

const  routes = [
    {
        path: "/admin",
        component: Index
    },
    {
        path: "/admin/users",
        component: Users
    },
    {
        name: 'UserEdit',
        path: "/admin/users/edit/:id",
        component: UserEdit

    }
    ];

    export default new vueRouter({
        mode: "history",
        routes
    })
