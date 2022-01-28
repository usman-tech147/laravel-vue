<template>
    <div class="modal fade at-modaltheme at-logoutmodal" id="exampleModalCentervtwo" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">delete song</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Are you sure you want to delete song?</span>
                    <div class="at-btnholder">
                        <a href="" class="at-btnno">cancel</a>
                        <button href="" class="at-btnyes at-bgred" @click="deleteRecord">delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['record'],
        methods: {
            async deleteRecord() {
                await axios.delete(`/deleteArtist/${this.record}`)
                    .then((response) => {
                        window.location.reload();
                        console.log(response);
                    }).catch((error) => {
                        console.log(error);
                    })
            }
        }
    }
</script>
