<template>
    <section class="publications">
        <div class="publications__container">
            <div class="publications__row">
                <div class="publications__item  publications__text-block">
                    <text-block
                        title="Публикации & обложки"
                        :text="text_1"
                    />
                </div>
            </div>
            <div class="publications__row">
                <div class="publications__item  publications__media-1">
                    <img src="../../assets/img/publications/image_1.png" alt="image">
                </div>
                <div class="publications__item  publications__media-2">
                    <img src="../../assets/img/publications/image_2.png" alt="image">
                </div>
                <div class="publications__item  publications__media-3">
                    <img src="../../assets/img/publications/image_3.png" alt="image">
                </div>
                <div class="publications__item  publications__media-4">
                    <img src="../../assets/img/publications/image_4.png" alt="image">
                </div>
                <div class="publications__item  publications__media-5">
                    <img src="../../assets/img/publications/image_5.png" alt="image">
                </div>
                <div class="publications__item  publications__media-6">
                    <img src="../../assets/img/publications/image_6.png" alt="image">
                    <img class="publications__ghost-img" src="../../assets/img/publications/image_5.png" alt="image">
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';

    export default {
        name: "Publications",
        components: {
            TextBlock
        },
        data() {
            return {
                text_1: [
                    'На страницах и обложках глянцевых изданий, в популярных блогах и на модных интернет-ресурсах я всегда делюсь самым сокровенным — своим личным опытом. Я с удовольствием раскрываю секреты работы, карьеры и жизни.'
                ]
            }
        }
    }
</script>

<style lang="less">
    .publications {
        &__container {
            .wrapper();
        }
        &__row {
            .row-flex();
            justify-content: space-between;
            .md-block({ justify-content: center; });
        }

        &__text-block {
            .size(12);
        }
        &__item {
            .col();
            margin-bottom: 10px;

            img {
                object-fit: cover;
                width: 100%;
                height: 100%;
            }
        }
        &__media-1 {
            .size(3.8);
            .size-md(6);
            .size-sm(6);
            .size-xs(12);
            .md-block({ order: 1; });
            .sm-block({ order: 1; });
            .xs-block({ order: 1; });
        }
        &__media-2 {
            .size(3.5);
            .size-md(6);
            .size-sm(6);
            .size-xs(12);
            .md-block({ order: 4; });
            .sm-block({ order: 2; });
            .xs-block({ order: 3; });
        }
        &__media-3 {
            .size(3.8);
            .size-md(6);
            .size-sm(12);
            .size-xs(12);
            .md-block({ order: 2; });
            .sm-block({ order: 5; });
            .xs-block({ display: none; });
        }
        &__media-4 {
            .size(3.8);
            .size-md(12);
            .size-sm(6);
            .size-xs(12);
            .md-block({ order: 3; });
            .sm-block({ order: 4; });
            .xs-block({ order: 5; });
        }
        &__media-5 {
            .size(3.8);
            .size-md(6);
            .size-sm(6);
            .size-xs(12);
            .md-block({ display: none; });
            .sm-block({ display: flex; order: 3; });
            .xs-block({ order: 2; });
        }
        &__media-6 {
            .size(3.8);
            .size-md(6);
            .size-sm(12);
            //.size-xs(4);
            .md-block({ order: 5; display: flex; flex-direction: column; });
            .sm-block({ order: 6; });
            .xs-block({ order: 5; });
        }

        &__ghost-img {
            display: none;
            margin-top: 10px;
            .md-block({ display: flex; });
            .sm-block({ display: none; });
        }
    }
</style>