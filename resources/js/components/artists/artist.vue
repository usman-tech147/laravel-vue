<template>
    <main id="at-main" class="at-main at-haslayout">
        <router-view></router-view>
        <div v-if="homePage" class="at-artistholder right-side">
            <div class="at-content">
                <div class="at-pagehead">
                    <div class="at-pagetitle">
                        <h2>artists</h2>
                    </div>
                    <div class="at-pageheadrrightarea">
                        <router-link to="/artists/add-artists" class="at-btn">
                            <i class="icon-add"></i>
                            <span>add new artists</span>
                        </router-link>
                    </div>
                </div>
                <div class="at-artistcontent">
                    <div class="at-artist" v-for="artist in artists" :key="artist.id">
                        <figure class="at-artistimg">
                            <img :src="'/uploads/'+artist.image" alt="artist image">
                            <figcaption>
                                <ul>
                                    <li>
                                        <router-link :to="'/artists/edit-artists/'+ artist.id" class="at-btn">
                                            <i class="icon-edit-icon"></i>
                                        </router-link>
                                    </li>
                                    <li>
                                        <button data-toggle="modal" data-target="#exampleModalCentervtwo" @click="getArtistId(artist)">
                                            <i class="icon-delete-icon"></i>
                                        </button>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="at-artistdetail">
                            <h3>{{ artist.first_name }} {{ artist.last_name }}</h3>
                            <span>100M followers</span>
                        </div>
                    </div>
                </div>
                <delete-songs :record="this.data"></delete-songs>
            </div>
        </div>
    </main>
</template>

<script>
    // import editSongs from '../artistModals/editSong.vue';
    import deleteSongs from '../artistModals/deleteSongs.vue';

    export default {
        data() {
            return {
                haveRecord: false,
                artists: {},
                data:''
            }
        },
        components: {
            deleteSongs
        },
        methods: {
            getArtists() {
                axios.get('/list')
                    .then((response) => {
                        this.artists = response.data
                    }).catch((error) => {
                    console.log(error)
                })
            },
            getArtistId(record){
                this.data = record.id;
            }
        },
        computed: {
            homePage() {
                if (this.$route.path == "/" || this.$route.path == "/artists") {
                    return true
                } else {
                    return false
                }
            }
        },
        created() {
            this.getArtists();
        }
    }
</script>

<style scoped>
    .right-side {
        margin-left: 347px;
    }
</style>
