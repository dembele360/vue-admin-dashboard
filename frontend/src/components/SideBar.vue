<template>
    <v-navigation-drawer v-model="drawer" app>
        <v-sheet color="grey lighten-4" class="pa-4">
            <v-avatar class="mb-4" color="grey darken-1" size="64"></v-avatar>
            <div>mussa@fabonic.co.tz</div>
        </v-sheet>

        <v-img></v-img>

        <v-divider></v-divider>

        <v-list>
            <v-list-item v-for="(link, index) in links" :key="index" link @click="goTo(link.route)">
                <v-list-item-icon>
                    <v-icon>{{ link.icon }}</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                    <v-list-item-title>{{ link.text }}</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
export default {
    name: 'SideBar',
    props: ['drawer'],
    data: () => ({
        links: [
            { icon: 'mdi mdi-microsoft-windows', text: 'Dashboard', route: '/' },
            { icon: 'mdi mdi-cog', text: 'Company Settings', route: '/company-settings' },
            { icon: 'mdi mdi-account-multiple-check', text: 'Users', route: '/users' },
            { icon: 'mdi mdi-shield-check', text: 'Roles', route: '/roles' },
            { icon: 'mdi mdi-map-marker', text: 'Locations', route: '/locations' },
        ],
    }),
    methods: {
        goTo(route) {
            this.$router.push(route);
        }
    }
}
</script>