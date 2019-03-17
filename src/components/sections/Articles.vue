<template>
    <slider class="articles" v-bind="options">
        <div class="articles__slide">
            <div class="articles__container">
                <div class="articles__row">
                    <div class="articles__item  articles__img-block">Картинка_1</div>
                    <div class="articles__item  articles__text-block">Текст_1</div>
                </div>
            </div>
        </div>
        <div class="articles__slide">
            <div class="articles__container">
                <div class="articles__row">
                    <div class="articles__item  articles__img-block">Картинка_2</div>
                    <div class="articles__item  articles__text-block">Текст_2</div>
                </div>
            </div>
        </div>
        <div class="articles__slide">
            <div class="articles__container">
                <div class="articles__row">
                    <div class="articles__item  articles__img-block">Картинка_3</div>
                    <div class="articles__item  articles__text-block">Текст_3</div>
                </div>
            </div>
        </div>
        <div class="articles__slide">
            <div class="articles__container">
                <div class="articles__row">
                    <div class="articles__item  articles__img-block">Картинка_4</div>
                    <div class="articles__item  articles__text-block">Текст_4</div>
                </div>
            </div>
        </div>
    </slider>

</template>

<script>
    import Slider from './../blocks/Slider';

    export default {
        name: "Articles",
        components: {
            Slider
        },
        data() {
            return {
                options: {
                    items: 1,
                    margin: 0,
                    nav: true,
                    dots: false,
                    loop: true,
                    timing: 'ease',
                    offset: 1,
                    prevNav: '',
                    nextNav: '',
                    sibling: false,
                    responsive: {}
                }
            }
        }
    }
</script>

<style lang="less">
    .articles {
        &__slide {

        }

        &__container {
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