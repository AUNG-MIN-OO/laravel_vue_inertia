import Vue from 'vue'
import { createInertiaApp,Link } from '@inertiajs/inertia-vue'
import Toastr from 'vue-toastr'
import { InertiaProgress } from '@inertiajs/progress'
import {Inertia} from "@inertiajs/inertia";

Vue.use(Toastr)

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
})

InertiaProgress.init()

Vue.component('inertia-link', Link)


