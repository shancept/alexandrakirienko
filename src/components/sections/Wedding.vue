<template>
    <section class="wedding">
        <!--todo доделать адаптивку и плиточный блок-->
        <div class="wedding__container">
            <div class="wedding__row">
                <div class="wedding__item  wedding__text-block">
                    <text-block
                        title="Создание свадебных образов от стилистов студии Александры Кириенко"
                        :text="text_1"
                        modifier="no-margin"
                    />
                </div>
                <div class="wedding__item  wedding__note-block">
                    <text-block
                        :text="text_2"
                        modifier="no-margin"
                    />
                    <btn
                        class="wedding__btn"
                        href="#"
                        title="Узнать подробнее"
                        modifier="second"
                    />
                </div>
                <div class="wedding__item  wedding__img-block">
                    <div class="wedding__img  wedding__img-left">
                        <img src="./../../assets/img/wedding/image_1.png" alt="Изображение">
                    </div>
                    <div class="wedding__img  wedding__img-right">
                        <div class="wedding__img-right-1">
                            <img src="./../../assets/img/wedding/image_2.png" alt="Изображение">
                        </div>
                        <div class="wedding__img-right-2">
                            <img src="./../../assets/img/wedding/image_3.png" alt="Изображение">
                        </div>
                        <div class="wedding__img-right-3">
                            <img src="./../../assets/img/wedding/image_4.png" alt="Изображение">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';
    import Btn from './../blocks/Btn';

    export default {
        name: "Wedding",
        components: {
            TextBlock,
            Btn
        },
        data() {
            return {
                text_1: [
                    'Мы обожаем работать с невестами!\n',
                    'В этот день происходит настоящее волшебство, и мы хотим наполнить ваш день приятными эмоциями с самого начала.\n',
                    'Визажисты нашей студии создают легкие и элегантные образы, продумывают всё до малейших деталей, чтобы в самый важный день вы выглядели восхитительно.'
                ],
                text_2: [
                    '<i>Посмотрите портфолио, узнайте о деталях подготовки к самому важному дню\n' +
                    'и познакомьтесь с ценой на наши услуги</i>'
                ]
            }
        }
    }
</script>

<style lang="less">
    .wedding {
        padding: 40px 0;
        background-color: #fff;

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
            .size(6);
            .size-md(10);
            .md-block({ order: 1;});
        }
        &__note-block {
            margin-top: auto;
            .size(4);
            .size-md(10);
            .shift-left(2);
            .shift-md-left(0);
            .md-block({ order: 3;});
            .sm-block({ display: none; });

        }
        &__img-block {
            .size(12);
            //.row-flex();
            .md-block({ order: 2;});
            display: flex;
            flex-wrap: wrap;
            margin-top: 60px;
        }
        &__img {
            .col();
            margin-bottom: 10px;
            overflow: hidden;

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }
        &__img-left {
            .size(8);
            .size-lg(6);
            .size-sm(12);
            max-height: 600px;
        }
        &__img-right {
            .size(4);
            .size-lg(6);
            .size-sm(12);
            //.row-flex();
            display: flex;
            flex-wrap: wrap;
            max-height: 600px;
        }
        &__img-right-1 {
            .col();
            .size(6);
        }
        &__img-right-2 {
            .col();
            .size(6);
        }
        &__img-right-3 {
            .col();
            .size(12);
            margin-top: 10px;
        }

        &__btn {
            width: 140px;
            margin-top: 30px;
        }
    }
</style>