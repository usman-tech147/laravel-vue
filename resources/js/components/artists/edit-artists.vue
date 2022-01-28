<template>
    <div class="add-artists addart">
        <div class="at-content">
            <div class="at-pagehead">
                <div class="at-pagetitle">
                    <h2>edit artists</h2>
                </div>
            </div>
            <div v-if="success" class="error-color">
                {{ success }}
            </div>
            <div v-if="error" class="error-color">
                {{ error }}
            </div>
            <div class="at-addartistform">
                <form class="at-formtheme" @submit.prevent="updateArtists" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <div class="at-uploadimgarea">
                                <figure>
                                    <!--                                        <img src="assets/images/Artists/artist3.png" alt="upload image">-->
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
                                       v-model="artist_data.first_name">
                                <label>first name</label>
                                <div v-if="hasError('first_name')" class="error-color">
                                    {{errors['first_name'][0]}}
                                </div>
                            </div>
                            <div class="at-inputwidthfiftyvtwo">
                                <input type="text" name="last_name" placeholder="lastname"
                                       v-model="artist_data.last_name">
                                <label>last name</label>
                                <div v-if="hasError('last_name')" class="error-color">
                                    {{errors['last_name'][0]}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="facebook_url" placeholder="facebook"
                                   v-model="artist_data.facebook_url">
                            <label>facebook URL</label>
                            <div v-if="hasError('facebook_url')" class="error-color">
                                {{errors['facebook_url'][0]}}
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="instagram_url" placeholder="instagram"
                                   v-model="artist_data.instagram_url">
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
                imagePath: '',
                picture: '',
                imagePreview: null,
                showPreview: false,
                success: false,
                error: false,
                errors: {},
                tasveer: '',
                formFields: {
                    image: null,
                    first_name: null,
                    last_name: null,
                    facebook_url: null,
                    instagram_url: null
                },
                artist_data: {}
            }
        },
        components: {
            addSongs,
            editSongs,
            deleteSongs
        },
        computed: {
            imageSrc() {
                return this.imagePath ? this.imagePath : '/uploads/'+this.artist_data.image;
            }
        },
        methods: {
            getImagePath(event) {
                this.picture = event.target.files[0];
                var formd = new FormData();
                formd.append('image', this.picture);
                axios.post('/getImagePath', formd).then((response) => {
                    this.imagePath = response.data;
                    this.artist_data.image = this.picture.name;
                })
            },
            updateArtists() {
                axios.put(`/updateArtists/${this.$route.params.id}`, this.artist_data)
                    .then((response) => {
                        this.$router.push(
                            {
                                name: 'artists'
                            });
                    }).catch((error) => {
                    console.log(error.response.data.message)
                })
            },

            // artists() {
            //     let data = new FormData();
            //     data.append('first_name', this.formFields.first_name);
            //     data.append('last_name', this.formFields.last_name);
            //     data.append('facebook_url', this.formFields.facebook_url);
            //     data.append('instagram_url', this.formFields.instagram_url);
            //     if (document.getElementById('at-uploadimg').files[0]) {
            //         data.append('image', document.getElementById('at-uploadimg').files[0]);
            //     }
            //
            //     axios.post('/updateArtists', data)
            //         .then((res) => {
            //             this.onSuccess(res.data);
            //             // this.formFields.reset();
            //             this.$router.push(
            //                 {
            //                     name: 'artists'
            //                 });
            //         })
            //         .catch((error) => {
            //             if (error.response.status == 422) {
            //                 this.setErrors(error.response.data.errors);
            //             } else {
            //                 this.onFailure(error.response.data.message);
            //             }
            //         })
            // },
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
            axios.get(`/editArtists/${this.$route.params.id}`)
                .then((response) => {
                    this.artist_data = response.data;
                    // console.log(response.data);
                }).catch((error) => {
                console.log(error);
            })
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
