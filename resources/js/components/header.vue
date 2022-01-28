<template>
    <!--************************************
				Header Start
		*************************************-->
    <header id="at-header" class="at-header at-haslayout">
        <div class="at-headercontent">
            <div class="at-searchform">
                <form class="at-formtheme">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="search" placeholder="search">
                            <a href="javascript: void(0);" class="at-btnsearch">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="at-profilearea">
                <div class="dropdown show">
                    <router-link class="at-btnprofile" to="/edit-profile" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <figure>
                            <img src="images/profile.png" alt="profile image">
                        </figure>
                        <div class="at-username">
                            <span>abdul moiz</span>
                            <em>@moiz.renesistech</em>
                        </div>
                        <i class="icon-arrow-icon"></i>
                    </router-link>
                    <div class="dropdown-menu at-dropdownmenu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="editprofile.html">edit profile</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript: void(0);" class="at-btnmenu">
            <i class="icon-menu1"></i>
        </a>
        <div class="at-sidebarwrapper">
            <div class="at-sidebar">
                <strong class="at-logo">
                    <router-link to="/">
                        <img src="assets/images/logo.png" alt="logo">
                    </router-link>
                </strong>
                <strong class="at-logo at-logoicon">
                    <a href="artist.html">
                        <img src="assets/images/logo-two.png" alt="logo icon">
                    </a>
                </strong>
                <nav class="at-navigation">
                    <ul>
                        <li @click="selected = 1" :class="{active:selected == 1}">
                            <router-link to="/artists">
                                <i class="icon-artist"></i>
                                <span>artists</span>
                            </router-link>
                        </li>
                        <li @click="selected = 2" :class="{active:selected == 2}">
                            <router-link to="/categories">
                                <i class="icon-categorie"></i>
                                <span>categories</span>
                            </router-link>
                        </li>
                        <li @click="selected = 3" :class="{active:selected == 3}">
                            <router-link to="/popular-music">
                                <i class="icon-music"></i>
                                <span>popular music</span>
                            </router-link>
                        </li>
                        <li @click="selected = 4" :class="{active:selected == 4}">
                            <router-link to="/complaints">
                                <i class="icon-complain"></i>
                                <span>complaints</span>
                            </router-link>
                        </li>
<!--                        <li>-->
<!--                            <router-link to="/earnings-ads">-->
<!--                                <i class="icon-earning"></i>-->
<!--                                <span>earnings & ads</span>-->
<!--                            </router-link>-->
<!--                        </li>-->
                    </ul>
                </nav>
                <div class="at-logoutarea">
                    <a href="javascript: void(0);" class="at-btnlogout" data-toggle="modal" data-target="#exampleModalCenter">
                        <span>logout</span>
                        <i class="icon-logout"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
</template>

<script>
    export default {
        data() {
            return {
                selected: 1
            }
        },
        mounted() {
            console.log('I am example component')
        },
        // methods: {
        //     addClass: function () {
        //         return this.isActive = !this.isActive;
        //     }
        // }
    }
</script>
