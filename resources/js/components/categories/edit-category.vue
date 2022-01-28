<template>
    <div class="at-artistholder at-addartist at-addcategories edit-cat">
        <div class="at-content">
            <div class="at-pagehead">
                <div class="at-pagetitle">
                    <h2>edit category</h2>
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
                                <a href="#" class="at-btn"><span>update</span></a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .edit-cat {
        margin-left: 347px;
    }
</style>
