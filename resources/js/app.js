import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

import GoldButton from './components/GoldButton.vue';
import TextWithBottomBorder from './components/TextWithBottomBorder.vue';
import NewsButton from './components/NewsButton.vue';
import AnimatedMenuIcon from './components/AnimatedMenuIcon.vue';
import StepCard from './components/StepCard.vue';
import NewsCard from './components/NewsCard.vue';
import ArticleCard from './components/ArticleCard.vue';
import TitleAndButton from './components/TitleAndButton.vue';
import SocialCard from './components/SocialCard.vue';
import OrganizationCard from './components/OrganizationCard.vue';
import AnimatedAdminMenu from './components/AnimatedAdminMenu.vue';
import PqaButton from './components/PqaButton.vue';
import TestNav from './pages/TestNav.vue';
import NavLink from './shared/NavLink.vue';
import AdminTab from './shared/AdminTab.vue';
import EmptyCard from './components/EmptyCard.vue';



 
import vuetify from './plugins/vuetify';

createInertiaApp({
  resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob('./pages/**/*.vue')),
  progress: true,
  setup({ el, App, props, plugin }) {
    return createApp({ render: () => h(App, props,) })
    .mixin({methods: {route}})
      .use(plugin)
      .use(vuetify)
      .component('GoldButton', GoldButton)
      .component('TextWithBottomBorder', TextWithBottomBorder)
      .component('NewsButton', NewsButton)
      .component('AnimatedMenuIcon', AnimatedMenuIcon)
      .component('StepCard', StepCard)
      .component('NewsCard', NewsCard)
      .component('ArticleCard', ArticleCard)
      .component('TitleAndButton', TitleAndButton)
      .component('SocialCard', SocialCard)
      .component('OrganizationCard', OrganizationCard)
      .component('AnimatedAdminMenu', AnimatedAdminMenu)
      .component('TestNav', TestNav)
      .component('NavLink', NavLink)
      .component('AdminTab', AdminTab)
      .component('PqaButton', PqaButton)
      .component('EmptyCard', EmptyCard)
      .mount(el)
  },
});