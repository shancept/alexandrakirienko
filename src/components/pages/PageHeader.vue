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
                    <a href="#">
                        <img src="./../../assets/img/Header/logo.png" alt="logo">
                    </a>
                </div>
                <div class="page-header__item  page-header__item--write">
                    <btn href="#"/>
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
        name: "PageHeader",
        components: {
            Btn,
            SocialLink,
            MainNav
        }
    }
</script>

<style lang="less">
    .page-header {
        padding: 20px 0;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.20);

        &__container {
            .wrapper();
        }
        &__row {
            .row-flex();
            justify-content: space-between;
            .md-block({ flex-direction: column; justify-content: center; });
            align-items: center;
        }
        &__item {
            .col();
            .size(2);

            &--social {
                display: flex;
                min-width: 140px;
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
                width: 140px;
                .md-block({ order: 2; });
            }
            &--nav {
                .size(12);
                .size-md(4);
            }
        }
    }
</style>