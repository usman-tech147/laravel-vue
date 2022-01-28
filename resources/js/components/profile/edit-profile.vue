<template>
<!--    <main id="at-main" class="at-main at-haslayout">-->
        <div class="at-artistholder at-addartist at-editprofile edit-profile">
            <div class="at-content">
                <div class="at-pagehead">
                    <div class="at-pagetitle">
                        <h2>edit profile</h2>
                    </div>
                </div>
                <div class="at-addartistform">
                    <form class="at-formtheme">
                        <fieldset>
                            <div class="form-group">
                                <div class="at-uploadimgarea">
                                    <figure>
                                        <img src="/assets/images/Artists/artist1.png" alt="upload image">
                                    </figure>
                                    <div class="at-userimglabel">
                                        <input type="file" name="upload image" id="at-uploadimg">
                                        <label for="at-uploadimg">
                                            <i class="icon-upload"></i>
                                            upload photo
                                        </label>
                                        <a href="javascript: void();" class="at-btn at-btncancel">delete photo</a>
                                    </div>
                                </div>
                            </div>
                            <div class="at-inputwidthholder">
                                <div class="at-inputwidthfifty">
                                    <input type="text" name="firstname" placeholder="firstname">
                                    <label>first name</label>
                                </div>
                                <div class="at-inputwidthfiftyvtwo">
                                    <input type="text" name="last name" placeholder="lastname">
                                    <label>last name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="email">
                                <label>emailL</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="instagramurl" placeholder="instagram">
                                <label>instagram URL</label>
                            </div>
                            <div class="form-group at-genderselect">
                                <label>gender</label>
                                <span class="at-select">
										<select id="at-selecttheme" class="at-selecttheme">
											<option></option>
											<option>male</option>
											<option>female</option>
											<option>other</option>
										</select>
									</span>
                            </div>
                            <div class="form-group at-changepassword">
                                <h4>change password</h4>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="password">
                                <label>old password</label>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="password">
                                <label>new password</label>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="password">
                                <label>confirm password</label>
                            </div>
                            <div class="form-group">
                                <div class="at-inputwidthfifty">
                                    <a href="javascript: void(0);" class="at-btncancel at-btn"><span>discard changes</span></a>
                                </div>
                                <div class="at-inputwidthfiftyvtwo">
                                    <a href="artist.html" class="at-btn"><span>update</span></a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
<!--    </main>-->
</template>

<style scoped>
    .edit-profile {
        margin-left: 347px;
    }
</style>
