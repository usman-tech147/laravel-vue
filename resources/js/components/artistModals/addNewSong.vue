<template>
    <div class="modal fade at-modaltheme at-logoutmodal at-addsongmodal" id="exampleModalCentervthree" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">add new song</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="at-addsongform">
                        <form class="at-formtheme" @submit.prevent="addSong" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="title" placeholder="song title" v-model="formRecord.title">
                                    <label>song title</label>
                                    <div v-if="hasError('title')" class="error-color">
                                        {{errors['title'][0]}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="url" placeholder="song URL" v-model="formRecord.url">
                                    <label>song URL</label>
                                    <div v-if="hasError('url')" class="error-color">
                                        {{errors['url'][0]}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img v-if="imagePath" :src="imageSrc" class="selected-image" alt="popular music">
                                    <div class="at-uploadimginput" v-else>
                                        <input type="file" name="image" id="at-uploadcoverimg"
                                               v-on:change="getImagePath">
                                        <label for="at-uploadcoverimg">
                                            <i class="icon-uploadimg"></i>
                                            <span>upload cover photo</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="at-inputwidthfifty">
                                        <button class="at-btncancel at-btn"><span>cancel</span></button>
                                    </div>
                                    <div class="at-inputwidthfiftyvtwo">
                                        <button type="submit" class="at-btn"><span>add song</span></button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                success: false,
                error: false,
                errors: {},
                image: '',
                imagePath: '',
                formRecord: {
                    title: null,
                    url: null,
                }
            }
        },
        computed: {
            imageSrc() {
                return this.imagePath ? this.imagePath : '/assets/images/pop1.png';
            }
        },
        methods: {
            getImagePath(event) {
                this.image = event.target.files[0];
                var formd = new FormData();
                formd.append('image', this.image);
                axios.post('/getImagePath', formd).then((response) => {
                    this.imagePath = response.data;
                })
            },
            addSong() {
                let data = new FormData();
                data.append('title', this.formRecord.title);
                data.append('url', this.formRecord.url);
                data.append('image', this.image);
                axios.post('/add-song', data)
                    .then((response) => {
                        console.log(response.data)
                        this.$router.push(
                            {
                                path: '/artists/add-artists'
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
        }
    }
</script>

<style scoped>
    .selected-image {
        width: 410px;
    }
    .error-color {
        color: yellow;
    }
</style>
