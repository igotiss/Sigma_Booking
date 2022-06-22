import { createRouter, createWebHistory} from "vue-router";

import Staysindex from "../components/stays/Staysindex";

const routes = [
    {
        path: '/stays',
        name: 'stays.index',
        component: Staysindex
    }
]


export default createRouter( {
    history: createWebHistory(),
    routes
})
