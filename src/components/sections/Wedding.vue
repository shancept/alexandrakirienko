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
        }
        &__note-block {
            .size(4);
            .shift-left(2);
            margin-top: auto;
        }
        &__img-block {
            .size(12);
            .row-flex();
            margin-top: 60px;
        }

        &__btn {
            width: 140px;
            margin-top: 30px;
        }
    }
</style>