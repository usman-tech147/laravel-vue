<template>
    <div class="modal fade at-modaltheme at-logoutmodal at-addsongmodal" id="exampleModalCentervthree" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <form class="at-formtheme">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="facebookurl" placeholder="facebook">
                                    <label>song title</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="instagramurl" placeholder="instagram">
                                    <label>song URL</label>
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
                                        <a href="artist.html" class="at-btn"></i><span>add song</span></a>
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
