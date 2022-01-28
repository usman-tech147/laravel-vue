<template>
    <main id="at-main" class="at-main at-haslayout">
        <router-view></router-view>
        <div v-if="pageUrl" class="at-artistholder at-categoryholder">
            <div class="at-content">
                <div class="at-pagehead">
                    <div class="at-pagetitle">
                        <h2>categories</h2>
                    </div>
                    <div class="at-pageheadrrightarea">
                        <router-link to="/categories/add-category" class="at-btn">
                            <i class="icon-add"></i>
                            <span>add new category</span>
                        </router-link>
                    </div>
                </div>
                <div class="at-categorysongs at-categories music-category">
                    <div class="at-category at-song">
                        <figure class="at-artistimg">
                            <a href="#" class="at-btnpopmusic">
                                <img src="assets/images/categories/categories1.png" alt="category image">
                            </a>
                            <figcaption>
                                <ul>
                                    <li>
                                        <router-link to="/categories/edit-category">
                                            <i class="icon-edit-icon"></i>
                                        </router-link>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-toggle="modal"
                                           data-target="#exampleModalCentervtwo">
                                            <i class="icon-delete-icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <h4>rock</h4>
                    </div>
                </div>
                <delete-songs></delete-songs>
            </div>
        </div>
    </main>
</template>

<script>
    import deleteSongs from '../categoryModals/deleteSongs.vue';

    export default {
        components: {
            deleteSongs
        },
        computed: {
            pageUrl() {
                console.log(this.$route.path)
                if (this.$route.path == '/categories') {
                    return true
                } else {
                    return false
                }
            }
        }
    }
</script>

<style scoped>
    .music-category {
        margin-left: 349px;
    }
</style>
