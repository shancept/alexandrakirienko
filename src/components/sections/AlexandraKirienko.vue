<template>
    <section class="alexandra-kirienko">
        <div class="alexandra-kirienko__content">
            <div class="alexandra-kirienko__row">
                <div class="alexandra-kirienko__item  alexandra-kirienko__img-block">Картинки</div>
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
                    'Я работаю на телевидении, показах, журнальных съемках, проводила мастер-классы; являюсь make up стилистом программы "Успеть за 24 часа" на СТС с Александром Роговым и амбассадором коллекции [i]backstage line Dior[/i] в России.'
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
        }

        &__item {
            .col();
            .block();
        }

        &__img-block {
            .size(8);
        }

        &__text-block {
            .size(4);
        }
    }
</style>