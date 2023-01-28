import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

import GoldButton from './components/GoldButton.vue';
import TextWithBottomBorder from './components/TextWithBottomBorder.vue';
import NewsButton from './components/NewsButton.vue';
import AnimatedMenuIcon from './components/AnimatedMenuIcon.vue';



 
import vuetify from './plugins/vuetify';

createInertiaApp({
  resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob('./pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    return createApp({ render: () => h(App, props) })
    .mixin({methods: {route}})
      .use(plugin)
      .use(vuetify)
      .component('GoldButton', GoldButton)
      .component('TextWithBottomBorder', TextWithBottomBorder)
      .component('NewsButton', NewsButton)
      .component('AnimatedMenuIcon', AnimatedMenuIcon)
      .mount(el)
  },
});