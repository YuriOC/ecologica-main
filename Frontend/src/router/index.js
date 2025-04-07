import { createRouter, createWebHistory } from 'vue-router';
import Home from '../pages/Home.vue';
import QuemSomos from '../pages/Quemsomos.vue';
import Parceria from '../pages/Parceria.vue';
import Contato from '../pages/Contato.vue';

const routes = [
  { path: '/', component: Home },
  { path: '/quemsomos', component: QuemSomos },
  { path: '/parceria', component: Parceria },
  { path: '/contato', component: Contato },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
      // Retorna para a posição salva (ex.: no caso de navegação para trás)
      return savedPosition;
    } else {
      // Move para o topo da página
      return { top: 0 };
    }
  }
});

export default router;