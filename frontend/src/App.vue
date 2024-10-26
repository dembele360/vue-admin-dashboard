<template>
  <v-app id="inspire">
    <Header @handle-drawer="toggleDrawer" />
    <SideBar :drawer="drawer" />

    <v-main>
      <v-container class="py-8 px-6" fluid>
        <router-view></router-view>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import Header from './components/Header.vue';
import SideBar from './components/SideBar.vue';

export default {
  data: () => ({
    cards: ['Today', 'Yesterday'],
    drawer: true,
    links: [
      ['mdi mdi-cog', 'Company Settings', '/company-settings'],
      ['mdi mdi-account-multiple-check', 'Users', '/users'],
      ['mdi mdi-shield-check', 'Roles', '/roles'],
      ['mdi mdi-map-marker', 'Locations', '/locations']
    ],
  }),
  components: {
    Header,
    SideBar
  },
  methods: {
    toggleDrawer() {
      this.drawer = !this.drawer;
    }
  }
}
</script>
