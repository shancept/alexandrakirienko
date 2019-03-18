<template>
    <section class="articles">
        <swiper :options="swiperOption" style="height: auto">
            <swiper-slide>
                <div class="articles__slide">
                    <div class="articles__row">
                        <div class="articles__item  articles__img-block">Картинка_1</div>
                        <div class="articles__item  articles__text-block">Текст_1</div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="articles__slide">
                    <div class="articles__row">
                        <div class="articles__item  articles__img-block">Картинка_1</div>
                        <div class="articles__item  articles__text-block">Текст_1</div>
                    </div>
                </div>
            </swiper-slide>
            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
        </swiper>
    </section>
</template>

<script>
    import 'swiper/dist/css/swiper.css';
    import {swiper, swiperSlide} from 'vue-awesome-swiper';

    export default {
        name: "Articles",
        components: {
            swiper,
            swiperSlide
        },
        data() {
            return {
                swiperOption: {
                    autoHeight: true,
                    spaceBetween: 20,
                    loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    }
                }
            }
        }
    }
</script>

<style lang="less">
    .articles {
        &__slide {
            .wrapper();
        }

        &__row {
            .row-flex();
            align-items: center;
        }

        &__item {
            .col();
            .block();
        }

        &__img-block {
            .size(3);
        }

        &__text-block {
            .size(9);
            height: 100px;
        }
    }

</style>