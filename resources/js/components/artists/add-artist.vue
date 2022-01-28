<template>
    <div class="add-artists addart">
        <div class="at-content">
            <div class="at-pagehead">
                <div class="at-pagetitle">
                    <h2>add new artists</h2>
                </div>
            </div>
            <div v-if="success" class="error-color">
                {{ success }}
            </div>
            <div v-if="error" class="error-color">
                {{ error }}
            </div>
            <div class="at-addartistform">
                <form class="at-formtheme" @submit.prevent="addArtists" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <div class="at-uploadimgarea">
                                <figure>
                                    <!--                                    <img src="/img/profile/profile.png" alt="upload image">-->
                                    <img :src="imageSrc" alt="upload image">
                                </figure>
                                <div v-if="hasError('image')" class="error-color">
                                    {{errors['image'][0]}}
                                </div>
                                <div class="at-userimglabel">
                                    <input type="file" name="image" id="at-uploadimg" v-on:change="getImagePath">
                                    <label for="at-uploadimg">
                                        <i class="icon-upload"></i>
                                        upload photo
                                    </label>
                                    <a href="#" class="at-btn at-btncancel">delete photo</a>
                                </div>
                            </div>
                        </div>
                        <div class="at-inputwidthholder">
                            <div class="at-inputwidthfifty">
                                <input type="text" name="first_name" placeholder="firstname"
                                       v-model="formFields.first_name">
                                <label>first name</label>
                                <div v-if="hasError('first_name')" class="error-color">
                                    {{errors['first_name'][0]}}
                                </div>
                            </div>
                            <div class="at-inputwidthfiftyvtwo">
                                <input type="text" name="last_name" placeholder="lastname"
                                       v-model="formFields.last_name">
                                <label>last name</label>
                                <div v-if="hasError('last_name')" class="error-color">
                                    {{errors['last_name'][0]}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="facebook_url" placeholder="facebook"
                                   v-model="formFields.facebook_url">
                            <label>facebook URL</label>
                            <div v-if="hasError('facebook_url')" class="error-color">
                                {{errors['facebook_url'][0]}}
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="instagram_url" placeholder="instagram"
                                   v-model="formFields.instagram_url">
                            <label>instagram URL</label>
                            <div v-if="hasError('instagram_url')" class="error-color">
                                {{errors['instagram_url'][0]}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="at-inputwidthfifty">
                                <a href="#" class="at-btncancel at-btn"><span>cancel</span></a>
                            </div>
                            <div class="at-inputwidthfiftyvtwo">
                                <!--                                <router-link to="/artists" class="at-btn"><span>add artist</span></router-link>-->
                                <button type="submit" class="at-btn"><span>add artist</span></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="at-addsongarea">
                <div class="at-pagehead">
                    <div class="at-pagetitle">
                        <h2>artists song</h2>
                    </div>
                    <div class="at-pageheadrrightarea">
                        <button class="at-btn" data-toggle="modal" data-target="#exampleModalCentervthree">
                            <i class="icon-add"></i>
                            <span>add new song</span>
                        </button>
                    </div>
                    <add-songs></add-songs>
                </div>
                <div class="at-categorysongs">
                    <div class="at-song" v-for="song in songs" :key="song.id">
                        <figure class="at-artistimg">
                            <img :src="'/uploads/'+song.image" alt="popular music">
                            <figcaption>
                                <ul>
                                    <button data-toggle="modal" data-target="#exampleModalCentervfour">
                                        <i class="icon-edit-icon"></i>
                                    </button>
                                    <li>
                                        <button data-toggle="modal" data-target="#exampleModalCentervtwo">
                                            <i class="icon-delete-icon"></i>
                                        </button>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="at-songtitle">
                            <h3>{{song.title}}</h3>
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
    import addSongs from '../artistModals/addNewSong.vue';
    import editSongs from '../artistModals/editSong.vue';
    import deleteSongs from '../artistModals/deleteSongs.vue';

    export default {
        data() {
            return {
                songs: {},
                picture: '',
                imagePath: '',
                imagePreview: null,
                showPreview: false,
                success: false,
                error: false,
                errors: {},
                formFields: {
                    image: null,
                    first_name: null,
                    last_name: null,
                    facebook_url: null,
                    instagram_url: null
                }
            }
        },
        components: {
            addSongs,
            editSongs,
            deleteSongs
        },
        computed: {
            imageSrc() {
                return this.imagePath ? this.imagePath : '/img/profile/profile.png';
            }
        },
        methods: {
            getSongs() {
                axios.get('/songs').then((response) => {
                    this.songs = response.data;
                }).catch((error)=> {
                    console.log(error)
                })
            },
            getImagePath(event) {
                this.picture = event.target.files[0];
                var formd = new FormData();
                formd.append('image', this.picture);
                axios.post('/getImagePath', formd).then((response) => {
                    this.imagePath = response.data;
                })
            },
            addArtists() {
                let data = new FormData();
                data.append('first_name', this.formFields.first_name);
                data.append('last_name', this.formFields.last_name);
                data.append('facebook_url', this.formFields.facebook_url);
                data.append('instagram_url', this.formFields.instagram_url);
                data.append('image', this.picture);
                // if (document.getElementById('at-uploadimg').files[0]) {
                //     data.append('image', document.getElementById('at-uploadimg').files[0]);
                // }

                axios.post('/add', data)
                    .then((res) => {
                        this.onSuccess(res.data);
                        // this.formFields.reset();
                        this.$router.push(
                            {
                                name: 'artists'
                            });
                    })
                    .catch((error) => {
                        if (error.response.status == 422) {
                            this.setErrors(error.response.data.errors);
                        } else {
                            this.onFailure(error.response.data.message);
                        }
                    })
            },
            onSuccess(message) {
                this.success = message.success;
            },
            onFailure(message) {
                this.error = message;
            },
            setErrors(errors) {
                this.errors = errors;
            },
            hasError(fieldname) {
                return (fieldname in this.errors);
            }
        },
        created() {
            this.getSongs();
        }
    }
</script>

<style scoped>
    .addart {
        margin-left: 347px;
    }

    .error-color {
        color: yellow;
    }
</style>
