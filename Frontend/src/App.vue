<template>
  <div id="app">
    <Header />
    <router-view />
    <Footer />
    <Menucel />
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Menucel from './components/Menucel.vue'
import Banner from './components/Banner.vue';


export default {
  components: {
    Header,
    Footer,
    Menucel,
    Banner,
  },
};
</script>
