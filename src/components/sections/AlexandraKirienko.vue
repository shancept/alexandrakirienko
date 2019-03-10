<template>
    <section class="alexandra-kirienko">
        <div class="alexandra-kirienko__content">
            <div class="alexandra-kirienko__row  alexandra-kirienko__row--main">
                <div class="alexandra-kirienko__item  alexandra-kirienko__img-block">
                    <div class="alexandra-kirienko__row">
                        <div class="alexandra-kirienko__item  alexandra-kirienko__media-1">
                            <img src="./../../assets/img/AlexandraKirienko/image_1.jpg" alt="image">
                        </div>
                        <div class="alexandra-kirienko__item  alexandra-kirienko__media-2">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jlbKhwV5vEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="alexandra-kirienko__item  alexandra-kirienko__media-3">
                            <img src="./../../assets/img/AlexandraKirienko/image_2.jpg" alt="image">
                        </div>
                        <div class="alexandra-kirienko__item  alexandra-kirienko__media-4">
                            <img src="./../../assets/img/AlexandraKirienko/image_3.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="alexandra-kirienko__item  alexandra-kirienko__text-block">
                    <TextBlock
                            title="Александра Кириенко"
                            :text="text_1"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';

    export default {
        name: "AlexandraKirienko",
        components: {
            TextBlock
        },
        data() {
            return {
                text_1: [
                    'Много лет я работаю визажистом со звёздами, являюсь бьюти-экспертом у большого количества международных марок.',
                    'Самые яркие звёзды доверяют мне свои лица: Ирина Шейк, Эвелина Хромченко, Равшана Куркова, Вера Брежнева и Лена Перминова.',
                    'Я работаю на телевидении, показах, журнальных съемках, проводила мастер-классы; являюсь make up стилистом программы "Успеть за 24 часа" на СТС с Александром Роговым и амбассадором коллекции <i>backstage line Dior</i> в России.'
                ]
            }
        }
    }
</script>

<style lang="less">
    .alexandra-kirienko {
        padding: 60px 0;

        &__content {
            .wrapper();
        }
        &__row {
            .row-flex();

            &--main {
                justify-content: space-between;
                align-items: center;

                .md-block({ flex-direction: column; });
            }
        }

        &__item {
            .col();
            margin-bottom: 10px;

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }

        &__text-block {
            .size(3.5);
            .size-md(9);
        }

        &__img-block {
            .size(9);
        }

        &__media-1 {
            .size(12);
        }
        &__media-2 {
            .size(4.5);
            .size-xs(12);
            .xs-block({ order: 1; });
        }
        &__media-3 {
            .size(4.5);
            .size-xs(8);
        }
        &__media-4 {
            .size(2);
            .size-xs(4);
        }
    }
</style>