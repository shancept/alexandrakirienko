<template>
    <section class="beauty-academy">
        <div class="beauty-academy__container">

            <div class="beauty-academy__text-block">
                <div class="beauty-academy__row">
                    <div class="beauty-academy__item  beauty-academy__title">
                        <text-block
                                title="Академия красоты Александры Кириенко"
                        />
                    </div>
                </div>
                <div class="beauty-academy__row">
                    <div v-for="(text, key) in texts" :key="key" class="beauty-academy__item  beauty-academy__text">
                        <text-block :text="text"/>
                    </div>
                </div>
            </div>
            <div class="beauty-academy__row">
                <div v-for="(price, key) in prices" :key="key" class="beauty-academy__item  beauty-academy__price">
                    <price
                        :priceData="price"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';
    import Price from '../blocks/Price';

    export default {
        name: "BeautyAcademy",
        components: {
            TextBlock,
            Price
    },
        data() {
            return {
                texts: {
                    text_1: [
                        '<b>Открытие собственной академии красоты</b> — ответственное и важное дело всей моей жизни: передать знания, навыки и опыт, поделиться секретами и зажечь вас искренней любовью к профессии!'
                    ],
                    text_2: [
                        'Мы учим работать на качественной косметике класса люкс, даем самые актуальные техники на сегодняшний день \n' +
                        'и стажируем лучших студентов.'
                    ]
                },
                //todo Добавить ссылки
                prices: {
                    price_1: {
                        img: require('../../assets/img/prices/image_1.jpg'),
                        title: 'МК «Архитектура бровей»',
                        price: '12000р',
                        text: [
                            'Трехдневный мастер-класс для начинающих:',
                            '- теория (от основ до колористики)',
                            '- инструментарий',
                            '- технологии и техники',
                            '- работа с клиентом',
                            '- практика'
                        ],
                        btn: {
                            href: '#',
                            text: 'Подробнее'
                        }
                    },
                    price_2: {
                        img: require('../../assets/img/prices/image_2.jpg'),
                        title: 'Базовый курс «ВИЗАЖИСТ»',
                        price: '35000р',
                        text: [
                            'Экспресс группа — 10 дней',
                            'Курс проходит в группе до 10 человек',
                            'Базовый курс: от введения в профессию и общих знаний, до голливудских техник и возрастного макияжа. Отработка на моделях каждый день.'
                        ],
                        btn: {
                            href: '#',
                            text: 'Подробнее'
                        }
                    },
                    price_3: {
                        img: require('../../assets/img/prices/image_3.jpg'),
                        title: '«Makeup — уроки для себя»',
                        price: '5000р',
                        text: [
                            'Самостоятельность в умении нанести мейкап — для многих это необходимость. Специально для вас и создан этот курс:',
                            '1 день, 3 часа.',
                            'Программа курса это базис - дневной и вечерний макияж, и конечно - секреты.'
                        ],
                        btn: {
                            href: '#',
                            text: 'Подробнее'
                        }
                    }
                }
            }
        }
    }
</script>

<style lang="less">
    .beauty-academy {
        background-color: #fff;
        
        &__container {
            .wrapper();
        }
        &__row {
            .row-flex();
        }
        &__item {
            .col();
            margin-bottom: 10px;
        }

        &__text-block {
            margin-bottom: 90px;
            .md-block({margin-bottom: 20px;});
        }

        &__title {
            .size(4);
            .size-md(12);
        }

        &__text {
            .size(6);
            .size-md(12);
        }

        &__price {
            .size(4);
            .size-md(12);
            margin-bottom: 40px;


            img {
                height: 240px;
                .md-block({height: 100%;});
            }
        }
    }

</style>