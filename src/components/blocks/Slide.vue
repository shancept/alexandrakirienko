<template>
    <div class="slide">
        <div class="slide__container">
            <div class="slide__row">
                <div class="slide__item  slide__img-block">
                    <img :src="slide.img" alt="Изображение">
                </div>
                <div class="slide__item  slide__text-block">
                    <h3 class="slide__title" v-html="slide.title"></h3>
                    <div class="slide__text">
                        <p v-for="(paragraph, key) in slide.paragraphs" :key="key" v-html="paragraph"></p>
                    </div>
                    <a :href="slide.link" class="slide__btn">Подробнее <span>&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Slide",
        props: {
            'slide': Object
        }
    }
</script>

<style lang="less">
    .slide {
        &__container {
            .wrapper();
        }
        &__row {
            .row-flex();
            justify-content: space-between;
            align-items: center;
        }
        &__item {
            .col();
        }

        &__img-block {
            .size(3);
            .size-md(10);
            .shift-md(1);
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        &__text-block {
            .size(8);
            .size-md(10);
            .shift-md(1);
        }

        &__title {
            font-size: 22px;
        }

        &__text {
            font-size: 16px;

            a {
                color: #ff8562;
                text-decoration: none;
            }
        }

        &__btn {
            font-size: 20px;
            font-weight: 700;
            color: #000;

            span {
                font-family: Arial, Helvetica, sans-serif;
            }

            &:hover {
                color: #000;
                text-decoration: none;
            }
        }
    }
</style>