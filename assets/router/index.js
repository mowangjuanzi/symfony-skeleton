import {createRouter, createWebHashHistory} from "vue-router";
import Layout from "../views/Layout.vue";
import Login from "../views/Public/Login.vue";
import NotFound from "../views/Public/NotFound.vue";

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: "/",
            component: Layout,
            name: "home",
            meta: {}
        },
        {
            path: "/login",
            component: Login,
            name: "login",
            meta: {}
        },
        {
            path: "/404",
            component: NotFound,
            name: "NotFound",
            meta: {}
        }
    ]
});

export default router;
