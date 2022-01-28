<template>
    <main id="at-main" class="at-main at-haslayout">
        <div class="at-artistholder at-addartist at-popularmusicholder">
            <div class="at-content">
                <div class="at-pagehead">
                    <div class="at-pagetitle">
                        <h2>poupler music</h2>
                    </div>
                    <div class="at-pageheadrrightarea">
                        <button class="at-btn" data-toggle="modal" data-target="#exampleModalCentervthree">
                            <i class="icon-add"></i>
                            <span>add new song</span>
                        </button>
                    </div>
                    <add-songs></add-songs>
                </div>
                <div class="at-addsongarea">
                    <div class="at-categorysongs music-song">
                        <div class="at-song">
                            <figure class="at-artistimg">
                                <img src="assets/images/pop-music/pop1.png" alt="popular music">
                                <figcaption>
                                    <ul>
                                        <li>
                                            <button data-toggle="modal" data-target="#exampleModalCentervfour">
                                                <i class="icon-edit-icon"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button data-toggle="modal" data-target="#exampleModalCentervtwo">
                                                <i class="icon-delete-icon"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <div class="at-songtitle">
                                <h3>shake it off</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <edit-songs></edit-songs>
                <delete-songs></delete-songs>
            </div>
        </div>
    </main>
</template>

<script>
    import addSongs from '../musicModals/addNewSong.vue';
    import editSongs from '../musicModals/editSong.vue';
    import deleteSongs from '../musicModals/deleteSongs.vue';

    export default {
        components: {
            addSongs,
            editSongs,
            deleteSongs
        }
    }

</script>


<style scoped>
    .music-song{
        margin-left: 349px;
    }
</style>
