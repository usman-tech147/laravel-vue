<template>
    <div class="at-artistholder at-addartist at-addcategoriesholder add-cat">
        <div class="at-content">
            <div class="at-pagehead">
                <div class="at-pagetitle">
                    <h2>add new category</h2>
                </div>
            </div>
            <div class="at-addartistform">
                <form class="at-formtheme">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="firstname" placeholder="firstname">
                            <label>category title</label>
                        </div>
                        <div class="form-group">
                            <div class="at-uploadimginput">
                                <input type="file" name="upload cover photo" id="at-uploadcoverimg">
                                <label for="at-uploadcoverimg">
                                    <i class="icon-uploadimg"></i>
                                    <span>upload cover photo</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="at-inputwidthfifty">
                                <a href="javascript: void(0);" class="at-btncancel at-btn"><span>cancel</span></a>
                            </div>
                            <div class="at-inputwidthfiftyvtwo">
                                <router-link to="/categories" class="at-btn"><span>add category</span></router-link>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="at-addsongarea">
                <div class="at-pagehead">
                    <div class="at-pagetitle">
                        <h2>category song</h2>
                    </div>
                    <div class="at-pageheadrrightarea">
                        <a href="javascript: void(0);" class="at-btn" data-toggle="modal" data-target="#exampleModalCentervthree">
                            <i class="icon-add"></i>
                            <span>add new song</span>
                        </a>
                    </div>
                    <add-songs></add-songs>
                </div>
                <div class="at-categorysongs">
                    <div class="at-song">
                        <figure class="at-artistimg">
                            <img src="/assets/images/pop1.png" alt="popular music">
                            <figcaption>
                                <ul>
                                    <li>
                                        <a href="addartist.html" data-toggle="modal" data-target="#exampleModalCentervfour">
                                            <i class="icon-edit-icon"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-toggle="modal" data-target="#exampleModalCentervtwo">
                                            <i class="icon-delete-icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="at-songtitle">
                            <h3>shake it off</h3>
                        </div>
                    </div>
                    <div class="at-song">
                        <figure class="at-artistimg">
                            <img src="/assets/images/pop-music/pop2.png" alt="popular music">
                            <figcaption>
                                <ul>
                                    <li>
                                        <a href="addartist.html" data-toggle="modal" data-target="#exampleModalCentervfour">
                                            <i class="icon-edit-icon"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-toggle="modal" data-target="#exampleModalCentervtwo">
                                            <i class="icon-delete-icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="at-songtitle">
                            <h3>shake it off</h3>
                        </div>
                    </div>
                </div>
                <edit-songs></edit-songs>
                <delete-songs></delete-songs>
            </div>
        </div>
    </div>
</template>

<script>
    import addSongs from '../categoryModals/addNewSong.vue';
    import editSongs from '../categoryModals/editSong.vue';
    import deleteSongs from '../categoryModals/deleteSongs.vue';

    export default  {
        components: {
            addSongs,
            editSongs,
            deleteSongs
        }
    }
</script>

<style scoped>
    .add-cat {
        margin-left: 347px;
    }
</style>
