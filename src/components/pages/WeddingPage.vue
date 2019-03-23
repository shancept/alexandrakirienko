<template>
    <main class="wedding-page">
        <div class="wedding-page__container">
            <div class="wedding-page__text-block">
                <div class="wedding-page__row">
                    <div class="wedding-page__item  wedding-page__title">
                        <text-block
                                title="Создание свадебных образов от стилистов студии Александры Кириенко"
                        />
                    </div>
                </div>
                <div class="wedding-page__row">
                    <div v-for="(text, key) in texts" :key="key" class="wedding-page__item  wedding-page__text">
                        <text-block :text="text"/>
                    </div>
                </div>
            </div>
            <div class="wedding-page__features">
                <div class="wedding-page__row">
                    <div v-for="(feature, key) in features" :key="key" class="wedding-page__item  wedding-page__feature">
                        <feature
                                :featureData="feature"
                        />
                    </div>
                </div>
                <span class="wedding-page__note">*при отказе от услуги предоплата не возвращается</span>
            </div>
            <div class="wedding-page__masonry">
                <masonry
                        :cols="{default: 4, 1100: 3}"
                        :gutter="10"
                >
                    <div v-for="(image, key) in images" :key="key" class="wedding-page__img">
                        <img :src="image" alt="Изображение">
                    </div>
                </masonry>
            </div>
            <div class="wedding-page__slider">
                <swiper :options="swiperOption" style="height: auto">
                    <swiper-slide v-for="(slide, num) in images" :key="num">
                        <div class="wedding-page__slide">
                            <img :src="slide" alt="Слайд">
                        </div>
                    </swiper-slide>
                    <div class="wedding-page__slide-btn  wedding-page__slide-btn--prev" slot="button-prev">
                        <svg viewBox="0 0 15.3 29"><polyline fill="none" stroke="#fbcfc4" stroke-width="1" points="0.5,0.5 14.5,14.5 0.5,28.5"></polyline></svg>
                    </div>
                    <div class="wedding-page__slide-btn  wedding-page__slide-btn--next" slot="button-next">
                        <svg viewBox="0 0 15.3 29"><polyline fill="none" stroke="#fbcfc4" stroke-width="1" points="0.5,0.5 14.5,14.5 0.5,28.5"></polyline></svg>
                    </div>
                </swiper>
            </div>
        </div>
    </main>
</template>

<script>
    import 'swiper/dist/css/swiper.css';
    import {swiper, swiperSlide} from 'vue-awesome-swiper';
    import TextBlock from './../blocks/TextBlock';
    import Feature from '../blocks/Price';

    export default {
        name: "WeddingPage",
        components: {
            swiper,
            swiperSlide,
            TextBlock,
            Feature
        },
        data() {
            return {
                swiperOption: {
                    autoHeight: true,
                    spaceBetween: 20,
                    loop: true,
                    speed: 1000,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: true
                    },
                    navigation: {
                        nextEl: '.wedding-page__slide-btn--next',
                        prevEl: '.wedding-page__slide-btn--prev'
                    }
                },
                texts: {
                    text_1: [
                        '<b>Исключительный подход к вашей индивидуальности.</b><br> \n' +
                        'Каждый свадебный образ – это деликатная работа, искусство подчеркнуть ваши самые прекрасные черты, придать легкий флер романтичности и нежности, которые олицетворяют этот день.'
                    ],
                    text_2: [
                        'Мы учим работать на качественной косметике класса люкс, даем самые актуальные техники на сегодняшний день \n' +
                        'и стажируем лучших студентов.'
                    ]
                },
                //todo Расставить ссылки
                features: {
                    feature_1: {
                        img: require('../../assets/img/weddingPage/feature_1.png'),
                        title: 'Создание пробного образа',
                        price: '4500р',
                        text: [
                            'Личная встреча за пару недель до свадьбы поможет найти контакт, обсудить тонкости нанесения тона и декоративных средств.<br>' +
                            'Самое главное — невеста сможет привыкнуть к образу, чтобы в день свадьбы чувствовать себя спокойнее.'
                        ],
                        btn: {
                            href: '#',
                            text: 'Заказать'
                        }
                    },
                    feature_2: {
                        img: require('../../assets/img/weddingPage/feature_2.png'),
                        title: 'Создание образа в студии',
                        price: '6000р',
                        text: [
                            'Мы создадим для вас восхитительный образ в окружении заботы и поддержим атмосферу праздника в нашем салоне. <br>' +
                            'Мы работаем только на профессиональной косметике премиального качества и используем самые трендовые техники.'
                        ],
                        btn: {
                            href: '#',
                            text: 'Заказать'
                        }
                    },
                    feature_3: {
                        img: require('../../assets/img/weddingPage/feature_3.png'),
                        title: 'Создание образа на выезде',
                        price: '8000р',
                        text: [
                            'Для Вашего удобства, мы можем приехать к Вам на дом и сделать макияж и прическу, в комфортных для Вас условиях. <br>' +
                            'Безупречный образ и спокойствие невесты в день свадьбы – это то, к чему мы стремимся в своей работе.'
                        ],
                        btn: {
                            href: '#',
                            text: 'Заказать'
                        }
                    }
                },
                images: [
                    require('./../../assets/img/weddingPage/image_1.png'),
                    require('./../../assets/img/weddingPage/image_2.png'),
                    require('./../../assets/img/weddingPage/image_3.png'),
                    require('./../../assets/img/weddingPage/image_4.png'),
                    require('./../../assets/img/weddingPage/image_5.png'),
                    require('./../../assets/img/weddingPage/image_6.png'),
                    require('./../../assets/img/weddingPage/image_7.png'),
                    require('./../../assets/img/weddingPage/image_8.png'),
                    require('./../../assets/img/weddingPage/image_9.png'),
                    require('./../../assets/img/weddingPage/image_10.png'),
                    require('./../../assets/img/weddingPage/image_11.png'),
                    require('./../../assets/img/weddingPage/image_12.png'),
                    require('./../../assets/img/weddingPage/image_13.png')
                ]
            }
        }
    }
</script>

<style lang="less">
    .wedding-page {
        padding: 40px 0;
        &__container{
            .wrapper();
        }
        &__row{
            .row-flex();
        }
        &__item{
            .col();
        }
        &__text-block {
            margin-bottom: 90px;
            .md-block({margin-bottom: 20px;});
        }
        &__title {
            .size(6);
            .size-md(12);
        }
        &__text {
            .size(6);
            .size-md(12);
        }
        &__feature {
            .size(4);
            .size-sm(12);
            margin-bottom: 40px;

            img {
                height: 240px;
                .lg-block({height: 200px;});
                .sm-block({height: 100%;});
            }
        }
        &__note {
            font-size: 12px;
        }
        &__features {
            padding-bottom: 40px;
        }
        &__img {
            margin-top: 10px;
        }
        &__masonry {
            .md-block({ display: none; })
        }

        &__slider {
            display: none;
            .md-block({ display: block; })
        }

        &__slide {
            width: 600px;
            height: 350px;
            margin: 0 auto;
            text-align: center;

            img {
                height: 100%;
                object-fit: cover;
            }
        }

        &__slide-btn {
            position: absolute;
            top: 50%;
            width: 60px;
            height: 60px;
            margin-top: -30px;
            z-index: 10;
            cursor: pointer;
            background-color: #000;
            border-radius: 50%;
            transition: background-color .3s;
            border: 0;
            outline: none;

            .xs-block({ width: 24px; height: 24px; });

            svg {
                position: absolute;
                top: 50%;
                margin-top: -14px;
                left: 50%;
                margin-left: -8px;
                width: 16px;
                height: 28px;

                .xs-block({ width: 6px; height: 10px; margin-top: -5px; margin-left: -3px; });
            }

            polyline {
                transition: stroke .3s;
            }

            &:hover {
                background-color: #fbcfc4;
                transition: background-color .3s;

                polyline {
                    stroke: #000;
                    transition: stroke .3s;
                }
            }


            &--prev {
                left: 10px;
                transform: scale(-1);
            }

            &--next {
                right: 10px;
            }
        }
    }
</style>