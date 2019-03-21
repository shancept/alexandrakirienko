<template>
    <!--todo ширина экрана через js-->
    <section class="portfolio">
        <div class="portfolio__container">
            <div class="portfolio__row">
                <div class="portfolio__item  portfolio__text-block">
                    <text-block
                        title="Портфолио"
                        :text="text_1"
                    />
                </div>
            </div>
            <div class="portfolio__masonry">
            <masonry
                    :cols="{default: 4, 1100: 3}"
                    :gutter="10"
            >
                <div v-for="(image, key) in images" :key="key" class="integration__img">
                    <img :src="image" alt="Изображение">
                </div>
            </masonry>
        </div>
            <div class="portfolio__slider">
                <swiper :options="swiperOption" style="height: auto">
                    <swiper-slide v-for="(slide, num) in images" :key="num">
                        <div class="portfolio__slide">
                            <img :src="slide" alt="Слайд">
                        </div>
                    </swiper-slide>
                    <div class="portfolio__slide-btn  portfolio__slide-btn--prev" slot="button-prev">
                        <svg viewBox="0 0 15.3 29"><polyline fill="none" stroke="#fbcfc4" stroke-width="1" points="0.5,0.5 14.5,14.5 0.5,28.5"></polyline></svg>
                    </div>
                    <div class="portfolio__slide-btn  portfolio__slide-btn--next" slot="button-next">
                        <svg viewBox="0 0 15.3 29"><polyline fill="none" stroke="#fbcfc4" stroke-width="1" points="0.5,0.5 14.5,14.5 0.5,28.5"></polyline></svg>
                    </div>
                </swiper>
            </div>
        </div>
    </section>
</template>

<script>
    import 'swiper/dist/css/swiper.css';
    import {swiper, swiperSlide} from 'vue-awesome-swiper';
    import TextBlock from './../blocks/TextBlock';

    export default {
        name: "Portfolio",
        components: {
            swiper,
            swiperSlide,
            TextBlock
        },
        data() {
            return {
                swiperOption: {
                    autoHeight: true,
                    spaceBetween: 20,
                    loop: true,
                    speed: 1000,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: true
                    },
                    navigation: {
                        nextEl: '.portfolio__slide-btn--next',
                        prevEl: '.portfolio__slide-btn--prev'
                    }
                },
                text_1: [
                    'Работа со звездами и модными домами, съемки, показы и обложки глянцевых журналов — ежедневная работа, и это — работа моей мечты.'
                ],
                images: [
                    require('./../../assets/img/portfolio/image_1.png'),
                    require('./../../assets/img/portfolio/image_2.png'),
                    require('./../../assets/img/portfolio/image_3.png'),
                    require('./../../assets/img/portfolio/image_4.png'),
                    require('./../../assets/img/portfolio/image_5.png'),
                    require('./../../assets/img/portfolio/image_6.png'),
                    require('./../../assets/img/portfolio/image_7.png'),
                    require('./../../assets/img/portfolio/image_8.png'),
                    require('./../../assets/img/portfolio/image_9.png'),
                    require('./../../assets/img/portfolio/image_10.png'),
                    require('./../../assets/img/portfolio/image_11.png'),
                    require('./../../assets/img/portfolio/image_12.png'),
                    require('./../../assets/img/portfolio/image_13.png'),
                    require('./../../assets/img/portfolio/image_14.png'),
                ]
            }
        }
    }
</script>

<style lang="less">
    .portfolio {
        &__container {
            .wrapper();
        }
        &__row {
            .row-flex();
        }
        &__item {
            .col();
        }

        &__text-block {
            .size(8);
            margin-bottom: 40px;
        }

        &__masonry {
            .md-block({ display: none; })
        }

        &__slider {
            display: none;
            .md-block({ display: block; })
        }

        &__slide {
            width: 600px;
            height: 350px;
            margin: 0 auto;
            text-align: center;

            img {
                height: 100%;
                object-fit: cover;
            }
        }

        &__slide-btn {
            position: absolute;
            top: 50%;
            width: 60px;
            height: 60px;
            margin-top: -30px;
            z-index: 10;
            cursor: pointer;
            background-color: #000;
            border-radius: 50%;
            transition: background-color .3s;
            border: 0;
            outline: none;

            .xs-block({ width: 24px; height: 24px; });

            svg {
                position: absolute;
                top: 50%;
                margin-top: -14px;
                left: 50%;
                margin-left: -8px;
                width: 16px;
                height: 28px;

                .xs-block({ width: 6px; height: 10px; margin-top: -5px; margin-left: -3px; });
            }

            polyline {
                transition: stroke .3s;
            }

            &:hover {
                background-color: #fbcfc4;
                transition: background-color .3s;

                polyline {
                    stroke: #000;
                    transition: stroke .3s;
                }
            }


            &--prev {
                left: 10px;
                transform: scale(-1);
            }

            &--next {
                right: 10px;
            }
        }
    }
</style>