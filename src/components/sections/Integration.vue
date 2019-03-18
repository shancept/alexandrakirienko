<template>
    <section class="integration">
        <div class="integration__text-block">
            <div class="integration__container">
                <text-block
                        title="Коллаборации & интеграции"
                        :text="text"
                        modifier="no-margin"
                />
            </div>
        </div>
        <div class="integration__slider">
            <swiper :options="swiperOption" style="height: auto">
                <swiper-slide>
                    <div class="foo"></div>
                </swiper-slide>
                <swiper-slide>
                    <div class="bar"></div>
                </swiper-slide>
                <div class="swiper-button-prev  integration__slide-btn  integration__slide-btn--mirror" slot="button-prev"></div>
                <div class="swiper-button-next  integration__slide-btn" slot="button-next"></div>
            </swiper>
        </div>
    </section>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';
    import {swiper, swiperSlide} from 'vue-awesome-swiper';

    export default {
        name: "Integration",
        components: {
            TextBlock,
            swiper,
            swiperSlide
        },
        data() {
            return {
                text: [
                    'Совместные работы с брендами, селебрити и модными домами — это интересный опыт',
                    'и безусловно полезный для всех участников формат взаимодействия.'
                ],
                swiperOption: {
                    autoHeight: true,
                    spaceBetween: 20,
                    effect: 'fade',
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
    .integration {
        
        &__text-block {
            padding: 20px 0;
        }

        &__slider {
            background-color: #fff;
        }

        &__container {
            .wrapper();
        }

        &__row {
            .row-flex();
        }

        &__item {
            .col();
        }

        &__slide-btn {
            width: 60px;
            height: 60px;
            background-image: url('./../../assets/img/articles/arrow.svg');
            background-color: #000;
            border-radius: 50%;
            background-size: 30px 30px;


            &--mirror {
                transform:scaleX(-1);
            }
        }
    }

    .foo {
         height: 200px;
         background-color: red;
     }

    .bar {
        height: 200px;
        background-color: green;
    }
</style>