/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import { createApp} from "vue";
import SearchPanel from "./components/SearchPanel";
import StayCard from "./components/StayCard";
import StaysGrid from "./components/StaysGrid";
import LaravelVuePagination from "laravel-vue-pagination";
import router from "./router";
import Staysindex from "./components/stays/Staysindex";


const app = createApp({})
app.component('search-panel', SearchPanel);
app.component('stay-card', StayCard);
app.component('stays-grid', StaysGrid);
app.component('Pagination', LaravelVuePagination);
app.component('stays-index', Staysindex)
app.use(router).mount('#app')
