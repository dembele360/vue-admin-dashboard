<template>
    <div class="Dashboard">
        <v-subheader class="d-flex justify-space-between align-center">
            <h1>Dashboard</h1>
            <v-btn color="purple" style="color : white" class="rounded-lg">
                View
            </v-btn>
        </v-subheader>
        <v-row style="margin-bottom:3%;">
            <v-col lg="6" cols="12">

                <v-alert dense text type="success">
                    Login Successfully. Welcome <strong>Musa</strong>
                </v-alert>
                <v-row>
                    <v-col lg="6" cols="12" md="3" sm="10" v-for="(list, index ) in activities" :key="index">
                        <v-hover v-slot="{ hover }" open-delay="200">
                            <v-card elevation="12" class="rounded-lg">
                                <v-list-item three-line>
                                    <v-list-item-content>
                                        <div class="text-overline mb-4">
                                            Today
                                        </div>
                                        <v-list-item-title class="text-h5 mb-1">
                                            {{ list.title }}
                                        </v-list-item-title>
                                        <v-list-item-subtitle>Total in All Locations</v-list-item-subtitle>
                                    </v-list-item-content>

                                    <div class="my-2">
                                        <v-btn class="text-center" :color="list.color" fab large dark>
                                            {{ list.value }}
                                        </v-btn>
                                    </div>
                                </v-list-item>
                            </v-card>
                        </v-hover>
                    </v-col>

                </v-row>
            </v-col>
            <v-col lg="6" cols="12">
                <v-card elevation="12" class="rounded-lg">
                    <v-card-title>Activities</v-card-title>
                    <v-card-text class="py-0">
                        <v-timeline align-top dense>
                            <v-timeline-item color="pink" small>
                                <v-row class="pt-1">
                                    <v-col>
                                        <strong>50 minutes ago</strong>
                                        <div class="text-caption">
                                            Mobile App
                                        </div>
                                    </v-col>
                                </v-row>
                            </v-timeline-item>
                            <v-timeline-item color="blue" small>
                                <v-row class="pt-1">
                                    <v-col>
                                        <strong>40 minutes ago</strong>
                                        <div class="text-caption">
                                            Mobile App
                                        </div>
                                    </v-col>
                                </v-row>
                            </v-timeline-item>
                            <v-timeline-item color="yellow" small>
                                <v-row class="pt-1">
                                    <v-col>
                                        <strong>20 minutes ago</strong>
                                        <div class="text-caption">
                                            Mobile App
                                        </div>
                                    </v-col>
                                </v-row>
                            </v-timeline-item>
                            <v-timeline-item color="purple" small>
                                <v-row class="pt-1">
                                    <v-col>
                                        <strong>5 minutes ago</strong>
                                        <div class="text-caption">
                                            Mobile App
                                        </div>
                                    </v-col>
                                </v-row>
                            </v-timeline-item>
                        </v-timeline>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>

        <v-row>
            <v-col lg="6" cols="12">
                <v-data-table :headers="headers" :items="desserts" :items-per-page="5" class="elevation-1"
                    caption="Fast Moving Items"></v-data-table>
            </v-col>

            <v-col lg="6" cols="12">
                <v-data-table :headers="headers" :items="desserts" :items-per-page="5" class="elevation-1"
                    caption="Slow Moving Items"></v-data-table>
            </v-col>
        </v-row>


    </div>
</template>

<script>
export default {
    name: 'Dashboard',
    data: () => ({
        activities: [
            { title: 'Total Purchases', value: '20,000', color: 'teal' },
            { title: 'Total Sales', value: '20,000', color: 'red' },
            { title: 'Total Expenses', value: '20,000', color: 'pink' },
            { title: 'Total Income', value: '20,000', color: 'purple' },
        ],
        headers: [
            {
                text: 'Product Name',
                align: 'start',
                sortable: false,
                value: 'name',
            },
            { text: 'Category', value: 'categories' },
            { text: 'Quantity', value: 'Quantity' },
            { text: 'Avg. Cost Price', value: 'AvgCost' },
            { text: 'Avg. Selling Price', value: 'AvgSp' },
        ],
        desserts: [
            {
                name: 'Frozen Yogurt',
                categories: '159',
                Quantity: 6.0,
                AvgCost: 24,
                AvgSp: 4.0,
            },
            {
                name: 'Ice cream sandwich',
                categories: 237,
                Quantity: 9.0,
                AvgCost: 37,
                AvgSp: 4.3,

            },
            {
                name: 'Eclair',
                categories: 262,
                Quantity: 16.0,
                AvgCost: 23,
                AvgSp: 6.0,
            },
            {
                name: 'Cupcake',
                categories: 305,
                Quantity: 3.7,
                AvgCost: 67,
                AvgSp: 4.3,
            },
            {
                name: 'Gingerbread',
                categories: 356,
                Quantity: 16.0,
                AvgCost: 49,
                AvgSp: 3.9,
            },
            {
                name: 'Jelly bean',
                categories: 375,
                Quantity: 0.0,
                AvgCost: 94,
                AvgSp: 0.0,
            },
            {
                name: 'Lollipop',
                categories: 392,
                Quantity: 0.2,
                AvgCost: 98,
                AvgSp: 0,
            },
            {
                name: 'Honeycomb',
                categories: 408,
                Quantity: 3.2,
                AvgCost: 87,
                AvgSp: 6.5,
            },
            {
                name: 'Donut',
                categories: 452,
                Quantity: 25.0,
                AvgCost: 51,
                AvgSp: 4.9,
            },
            {
                name: 'KitKat',
                categories: 518,
                Quantity: 26.0,
                AvgCost: 65,
                AvgSp: 7,
            },
        ],
    }),

}
</script>
