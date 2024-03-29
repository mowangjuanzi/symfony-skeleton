/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

import {createApp} from "vue";
import {createPinia} from 'pinia'
import App from "./views/App.vue";
import router from "./router";

const pinia = createPinia()
const app = createApp(App);
app.use(router);
app.use(pinia);
app.mount('#app');