import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import example from './components/header.vue';
import artists from './components/artists/artist.vue';
import addArtists from './components/artists/add-artist.vue';
import editArtists from './components/artists/edit-artists.vue'
import category from './components/categories/category.vue';
import addCategory from './components/categories/add-category.vue';
import editCategory from './components/categories/edit-category.vue';
import music from './components/music/popular-music.vue';
import complaints from './components/complaints/complain.vue';
import earnings from './components/earings/earnings-ads.vue';
import editProfile from './components/profile/edit-profile.vue';


const routes = [
    {
        name: 'artists',
        path: '/',
        component: artists
    },
    {
        // name: 'artists',
        path: '/artists',
        component: artists,
        children: [
            {
                name: 'add-artists',
                path: '/artists/add-artists',
                component: addArtists
            },
            {
                name: 'edit-artists',
                path: '/artists/edit-artists/:id',
                component: editArtists
            },
        ]
    },
    // {
    //     path: '/add-artists',
    //     component: addArtists
    // },
    {
        path: '/categories',
        component: category,
        children: [
            {
                path: '/categories/add-category',
                component: addCategory
            },
            {
                path: '/categories/edit-category',
                component: editCategory
            }
        ]
    },
    {
        path: '/popular-music',
        component: music
    },
    {
        path: '/complaints',
        component: complaints
    },
    {
        path: '/earnings-ads',
        component: earnings
    },
    {
        path: '/edit-profile',
        component: editProfile
    }
]

export default new VueRouter({
     mode: 'history',
     routes: routes
})
