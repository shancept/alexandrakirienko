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
        </div>
    </section>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';
    import Slider from './../blocks/Slider';

    export default {
        name: "Integration",
        components: {
            TextBlock,
            Slider
        },
        data() {
            return {
                text: [
                    'Совместные работы с брендами, селебрити и модными домами — это интересный опыт',
                    'и безусловно полезный для всех участников формат взаимодействия.'
                ],
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
    }
</style>