import './bootstrap';
import '@splidejs/vue-splide/css';
import '../css/app.css';

import { createSSRApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import Layout from './Layouts/AppLayout.vue';
import { modal } from 'inertia-modal';
import Multiselect from 'vue-multiselect';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${appName} - ${title}`,
    resolve: async (name) => {
      const page = await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'))
      page.default.layout = page.default.layout || Layout
      return page
    },
    setup({ el, App, props, plugin }) {
        return createSSRApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(modal, {
              resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob("./Pages/**/*.vue")),
            })
            .component('MultiSelect', Multiselect)
            .mount(el);
    },
    progress: {
      delay: 250,
      color: '#4B5563',
      includeCSS: true,
      showSpinner: true,
    },
});
