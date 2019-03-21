<template>
    <main class="biography">
        <div class="biography__container">
            <div class="biography__text-block">
                <text-block
                        title="Александра Кириенко"
                        :text="text_1"
                />
            </div>
            <div class="biography__img-block">
                <div class="biography__row">
                    <div class="biography__item  biography__item-img">
                        <img src="./../../assets/img/biography/img_1.png" alt="Изображение">
                    </div>
                    <div class="biography__item  biography__item-img">
                        <img src="./../../assets/img/biography/img_2.png" alt="Изображение">
                    </div>
                    <div class="biography__item  biography__item-img">
                        <img src="./../../assets/img/biography/img_3.png" alt="Изображение">
                    </div>
                </div>
            </div>
            <div class="biography__text-block">
                <div class="biography__row">
                    <text-block
                            v-for="(text, key) in texts_3"
                            :key="key"
                            class="biography__item  biography__item-text"
                            :text="text"
                    />
                </div>
            </div>
            <div class="biography__masonry">
                <masonry
                        :cols="{default: 4, 1100: 3, 960: 2, 560: 1}"
                        :gutter="10"
                >
                    <div v-for="(image, key) in images" :key="key" class="biography__img">
                        <img :src="image" alt="Изображение">
                    </div>
                </masonry>
            </div>
        </div>
        <feedback class="biography__feedback"/>
    </main>
</template>

<script>
    import Feedback from './../sections/Feedback';
    import TextBlock from './../blocks/TextBlock';

    export default {
        name: "Biography",
        components: {
            TextBlock,
            Feedback
        },
        data() {
            return {
                text_1: [
                    'Я всегда получала огромное удовольствие от того, что могу делать людей красивыми, и постепенно из хобби это переросло в профессию и большую страсть. <br>\n' +
                    'Много лет я работаю визажистом со звёздами, являюсь бьюти-экспертом у большого количества международных марок. <br> \n' +
                    'Самые яркие звёзды доверяют мне свои лица: Ирина Шейк, Эвелина Хромченко, Равшана Куркова, <br>\n' +
                    'Вера Брежнева и Лена Перминова.'
                ],
                text_2: [
                    '<b>Все началось со скучной работы.</b> Будучи молодой мамой, я работала продавцом в мужском отделе одежды из-за удобного графика. Меня это не вдохновляло вовсе, а любила я на самом деле косметику - скупала все и всюду, постоянно пробовала на себе разные мейки, красила подруг… И когда работа в магазине мне надоела совсем, я решила: пора сделать свое увлечение чем-то большим.<br>\n' +
                    '..после обучения началось самое страшное - нужно было начинать работать. А я никак не могла. Все время сомневалась, готова ли я. Бросалась в новые мастер-классы с головой, ездила два раза на обучение в Америку, посещала тематические выставки...Это главная ошибка новичка, на мой взгляд. Все время кажется, что нужно еще "чуть-чуть", не хватает чего-то. <br>\n' +
                    'Дерзайте! Практикуйтесь! Беритесь за любую работу!'
                ],
                texts_3: [
                    [
                        '<b>Я люблю учиться</b> и очень ценю возможность своими глазами смотреть на работу мастеров, которыми восхищаюсь. Первым знаковым для меня мастер-классом, который я посетила, стал мастер-класс визажиста Кабуки в Нью-Йорке. Он настоящая икона радикального, авангардного макияжа, работает с суперзвездами и делает макияжи для самых громких рекламных кампаний. Кстати, начинал он как визажист на площадке сериала Секс в Большом Городе.'
                    ],
                    [
                        '<b>Я восхищаюсь Питером Филлипсом</b> - это арт-директор дома Dior, он создает все косметические продукты марки. Прошлым летом мне удалось увидеть его в деле, когда я была на бэкстейдже Dior Couture. Ну и, конечно, огромная удача - это знакомство с Бобби Браун. Она приезжала в Россию и сама выбрала меня в качестве человека, который возьмет у нее интервью для сайта Buro 24/7.'
                    ],
                    [
                        'А еще мне посчастливилось познакомиться с <b>Викторией Бекхэм</b> - она запускала свою первую линейку косметики (это была коллаборация с Estee Lauder) и после показа устроила конференцию с участием визажистов разных стран. Я представляла Россию и тоже задавала вопросы Виктории.'
                    ]
                ],
                images: [
                    require('./../../assets/img/biography/image_1.png'),
                    require('./../../assets/img/biography/image_2.png'),
                    require('./../../assets/img/biography/image_3.png'),
                    require('./../../assets/img/biography/image_4.png'),
                    require('./../../assets/img/biography/image_5.png'),
                    require('./../../assets/img/biography/image_6.png'),
                    require('./../../assets/img/biography/image_7.png'),
                    require('./../../assets/img/biography/image_8.png'),
                    require('./../../assets/img/biography/image_9.png'),
                ]
            }
        }
    }
</script>

<style lang="less">
    .biography {
        &__container {
            .wrapper();
        }
        &__row {
            .row-flex();
        }
        &__item {
            .col();
        }
        &__img-block {
            padding: 40px 0;
        }
        &__item-img {
            .size(4);
            .size-md(8);
            .shift-md(2);
            .size-xs(12);
            .shift-xs(0);
            margin-top: 20px;

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }
        &__item-text {
            .size(4);
            .size-md(12);
            margin-top: 20px;
        }
        &__masonry {
            padding: 40px 0;
        }
        &__img {
            margin-top: 10px;
        }
    }
</style>