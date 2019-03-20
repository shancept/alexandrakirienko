<template>
    <section class="articles">
        <swiper :options="swiperOption" style="height: auto">
            <swiper-slide v-for="(slide, num) in slideData" :key="num">
                <slide :slide="slide"/>
            </swiper-slide>
            <div class="articles__slide-btn  articles__slide-btn--prev" slot="button-prev">
                <svg viewBox="0 0 15.3 29"><polyline fill="none" stroke="#fbcfc4" stroke-width="1" points="0.5,0.5 14.5,14.5 0.5,28.5"></polyline></svg>
            </div>
            <div class="articles__slide-btn  articles__slide-btn--next" slot="button-next">
                <svg viewBox="0 0 15.3 29"><polyline fill="none" stroke="#fbcfc4" stroke-width="1" points="0.5,0.5 14.5,14.5 0.5,28.5"></polyline></svg>
            </div>
        </swiper>
    </section>
</template>

<script>
    import 'swiper/dist/css/swiper.css';
    import {swiper, swiperSlide} from 'vue-awesome-swiper';
    import Slide from './../blocks/Slide';

    export default {
        name: "Articles",
        components: {
            swiper,
            swiperSlide,
            Slide
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
                        nextEl: '.articles__slide-btn--next',
                        prevEl: '.articles__slide-btn--prev'
                    }
                },
                slideData: [
                    {
                        img: require('./../../assets/img/articles/image_1.png'),
                        title: 'Мастер-класс по макияжу от Александры Кириенко, визажиста и сестры Елены Перминовой',
                        paragraphs: [
                            'Сияющая кожа и кукольные ресницы в инстаграме Елены Перминовой — дело рук ее сестры, визажиста Александры Кириенко. Журналу Tatler Александра рассказала о любимых средствах, с которыми не нужно ретушировать фотографии, и о том, как правильно красить брови. А брови, как известно, могут полностью изменить внешность.'
                        ],
                        link: 'https://www.tatler.ru/heroes/master-klass-po-makiyazhu-ot-aleksandry-kirienko-vizazhista-i-sestry-eleny-perminovoj'
                    },
                    {
                        img: require('./../../assets/img/articles/image_2.png'),
                        title: 'Бьютихакер недели: Александра Кириенко – как сделать идеальный макияж для фотографии ',
                        paragraphs: [
                            'Известный визажист, бьюти-блогер с 124-тысячным «Инстаграмом» и сестра модели Елены Перминовой, Александра Кириенко – о текстурах хайлайтеров, теней и тона для съемок. BeautyHack публикует лучшие советы! '
                        ],
                        link: 'https://beautyhack.ru/krasota/makiyazh/byutihaker-nedeli-aleksandra-kirienko-kak-sdelat-idealnyy-makiyazh-dlya-fotografii'
                    },
                    {
                        img: require('./../../assets/img/articles/image_3.png'),
                        title: 'Александра Кириенко. Гармония в чистом виде',
                        paragraphs: [
                            'Александра Кириенко, одна из самых востребованных и популярных визажистов нашего города, недавно открыла собственную beauty-студию, а также завоевала любовь ста тысяч подписчиков благодаря своему чувству стиля и хорошему вкусу. Александра рассказала о гармонии и вдохновении, поделилась правилами идеального гардероба и творческими планами в совместном проекте VOLNA magazine и Галереи бутиков MaxMara, ETRO, Armani Collezioni и Marina Rinaldi'
                        ],
                        link: 'http://volnamag.ru/moda/vitrina/aleksandra_kirienko/'
                    },
                    {
                        img: require('./../../assets/img/articles/image_4.png'),
                        title: 'Настроение Be.Beauty ',
                        paragraphs: [
                            'Известный визажист Александра Кириенко открыла свой бьюти-бар. Уникальный концепт студии позволил объединить главные тренды современности – красоту, качество, время и настроение. '
                        ],
                        link: 'http://www.sobaka.ru/nsk/fashion/beauty/43690'
                    },
                    {
                        img: require('./../../assets/img/articles/image_5.png'),
                        title: 'Идеальный вечерний макияж: секреты визажиста Александры Кириенко ',
                        paragraphs: [
                            'Звездный визажист и номинант на премию Glamour Influencers Awards 2018 в категории #glam_probeauty Александра Кириенко поделилась с Glamour секретами создания идеального вечернего макияжа. '
                        ],
                        link: 'https://www.glamour.ru/beauty_health/practice/8-sekretov-idealnogo-vechernego-makiyazha-ot-vizazhista-aleksandry-kirienko'
                    },
                    {
                        img: require('./../../assets/img/articles/image_6.png'),
                        title: 'Наталья Бардо, Елена Перминова, Александра Кириенко и другие звезды на ужине Lancome в честь Олимпии Ле-Тан',
                        paragraphs: [
                            'Специальной гостей вечера Lancome стала актриса и телеведущая Наталья Бардо. Своей яркой индивидуальностью, Наташа умеет задавать тренды, играючи примерять разные образы, оставаясь при этом верной своему стилю. Также из российских селебрити присутствовали Елена Перминова и Александра Кириенко.'
                        ],
                        link: 'http://www.woman.ru/beauty/medley2/article/209347/'
                    },
                    {
                        img: require('./../../assets/img/articles/image_7.png'),
                        title: 'ИСТОРИЯ УСПЕХА ВИЗАЖИСТА АЛЕКСАНДРЫ КИРИЕНКО ',
                        paragraphs: [
                            '"Все началось со скучной работы. Будучи молодой мамой, я работала продавцом в мужском отделе одежды из-за удобного графика. Меня это не вдохновляло вовсе, а любила я на самом деле косметику - скупала все и всюду, постоянно пробовала на себе разные мейки, красила подруг…"'
                        ],
                        link: 'http://www.mosmake.ru/news/istoriya-uspekha-vizazhista-aleksandry-kirienko/'
                    },
                    {
                        img: require('./../../assets/img/articles/image_8.png'),
                        title: '#GLAM_PROBEAUTY ',
                        paragraphs: [
                            'Именно ей полностью доверяет Лена Перминова, когда речь идет о макияже для важного мероприятия. А еще Александра основала собственный бьюти-бар и завоевала многотысячную любовь поклонников.'
                        ],
                        link: 'https://www.glamour.ru/awards/influencers-awards/glamour-influencers-awards-2018/glam_probeauty'
                    },
                    {
                        img: require('./../../assets/img/articles/image_9.png'),
                        title: 'Почему весной не обойтись без новой палетки от Smashbox ',
                        paragraphs: [
                            'Вся косметика Smashbox задумана как суперстойкая. Например, тени из коллекции Cover Shot: их тестировали под светом софитов в фотостудии Smashbox в Лос-Анджелесе. Все оттенки – высоко пигментированные, наносятся плотно и держаться могут, без шуток, круглыми сутками. Для того чтобы добиться такой стойкости и максимальной интенсивности цвета, наносите под тени базу. Лучше остановиться на марке Smashbox, потому что она будет лучше работать с «родной» палеткой. '
                        ],
                        link: 'https://www.buro247.ru/beauty/makeup/20-apr-2017-new-smashbox-cover-shot-eye-palettes.html'
                    },
                    {
                        img: require('./../../assets/img/articles/image_10.png'),
                        title: 'Презентация коллекции профессионального макияжа Dior Backstage Line ',
                        paragraphs: [
                            '<strong>Повод собраться</strong>: Вечеринка и презентация коллекции профессионального макияжа Dior Backstage Line. Эта коллекция базовых средств макияжа была создана лично креативным директором Dior по макияжу Питером Филипсом. <br><strong>Кто был</strong>: Ксения Собчак, Мария Федорова, Полина Киценко, Ляйсан Утяшева, Ксения Соловьева, Александра Кириенко<br>'
                        ],
                        link: 'http://posta-magazine.ru/society-column/dior-backstage-line'
                    },
                    {
                        img: require('./../../assets/img/articles/image_11.png'),
                        title: 'Лучшие образы Каннского кинофестиваля: мнения визажистов ',
                        paragraphs: [
                            'Рассказывает <a href="https://www.instagram.com/aleksandrakirienko/">Александра Кириенко</a>, визажист, основатель сети бьюти-баров<br>Be Beauty и makeup-стилист программы «Успей за 24»<br>с Александром Роговым на СТС. <br>'
                        ],
                        link: 'https://www.buro247.ru/kanny/19-may-best-makeup-from-cannes.html'
                    },
                    {
                        img: require('./../../assets/img/articles/image_12.png'),
                        title: 'Летний макияж: советы визажиста',
                        paragraphs: [
                            'Амбассадор коллекции Dior Backstage, визажист Александра Кириенко о правилах, must-have и табу летнего образа. А также о новой линии Dior Backstage.'
                        ],
                        link: 'https://www.elle.ru/krasota/beauty_blog/letniy-makiyaj-sovetyi-vizajista/'
                    },
                    {
                        img: require('./../../assets/img/articles/image_13.png'),
                        title: 'Вечеринка в честь 25-летия Bobbi Brown: красота на крыше ',
                        paragraphs: [
                            'Известный визажист и героиня мира beauty Бобби Браун впервые приехала в Россию: случай для такого визита особенный — в этом году марке Bobbi Brown исполняется 25 лет. Поздравить бренд и Бобби Браун лично пришли Елена Перминова, Эвелина Хромченко, Полина Сохранова и Александра Кириенко. '
                        ],
                        link: 'https://www.buro247.ru/lifestyle/photo-reports/vecherinka-25-letiya-bobbi-brown.html'
                    },
                    {
                        img: require('./../../assets/img/articles/image_14.png'),
                        title: '25 звездных сестер ',
                        paragraphs: [
                            'Женщины не менее азартны, чем мужчины. И зачастую даже родные сестры самозабвенно соревнуются друг с другом в погоне за лучшей работой, идеальным мужем и безупречной внешностью. PEOPLETALK предлагает тебе рейтинг звездных сестер. Думаем, о существовании многих ты даже и не догадывалась. Так кто из них добился большего успеха? '
                        ],
                        link: 'https://peopletalk.ru/article/25_zvezdnyih_sester/'
                    }
                ]
            }
        }
    }
</script>

<style lang="less">
    .articles {
        padding: 40px 0;

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