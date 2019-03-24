<template>
    <header class="page-header">
        <div class="page-header__container">
            <div class="page-header__row">
                <div class="page-header__item  page-header__item--social">
                    <SocialLink
                            href="https://www.facebook.com/alexandra.kirienko.3"
                            link="facebook"
                    />
                    <SocialLink
                            href="https://www.youtube.com/watch?time_continue=2348&v=YAeQXd5j6r8"
                            link="youtube"
                    />
                    <SocialLink
                            href="https://www.instagram.com/aleksandrakirienko/"
                            link="instagram"
                    />
                </div>
                <div class="page-header__item  page-header__item--logo">
                    <router-link to="/">
                        <img src="../../assets/img/header/logo.png" alt="logo">
                    </router-link>
                </div>
                <div class="page-header__item  page-header__item--write">
                    <btn href="#" title="Написать"/>
                </div>
                <div class="page-header__item  page-header__item--nav">
                    <MainNav/>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    import Btn from './../blocks/Btn';
    import SocialLink from './../blocks/SocialLink';
    import MainNav from './../blocks/MainNav';

    export default {
        components: {
            Btn,
            SocialLink,
            MainNav
        }
    }
</script>

<style lang="less">
    .page-header {
        padding-top: 20px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2);

        &__container {
            .wrapper();
        }
        &__row {
            .row-flex();
            justify-content: space-between;
            align-items: center;
            .md-block({ flex-direction: column; justify-content: center; });
        }
        &__item {
            .col();
            .size(2);
            .size-md(12);

            &--social {
                .shift(1);
                .shift-md(0);
                display: flex;
                flex-wrap: wrap;
                padding: 20px 0;
                .md-block({ order: 1; justify-content: center;});

                a {
                    margin: 0 5px;
                }
            }
            &--logo {
                .size(3);
                min-width: 250px;
                padding-bottom: 20px;
            }
            &--write {
                .shift(1);
                max-width: 140px;
                .md-block({ order: 2; width: 140px; padding-bottom: 40px;});
            }
            &--nav {
                .size(12);
            }
        }
    }
</style>