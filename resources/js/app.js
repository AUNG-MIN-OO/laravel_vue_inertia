import Vue from 'vue'
import { createInertiaApp,Link } from '@inertiajs/inertia-vue'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
})


Vue.component('inertia-link', Link)


