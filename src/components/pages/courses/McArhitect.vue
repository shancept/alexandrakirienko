<template>
    <main class="mc-arhitect">
        <course class="mc-arhitect__course" :courseData="courseData"/>
        <features class="mc-arhitect__features" :features="features" size="size-2"/>
        <program class="mc-arhitect__program" :program="program"/>
        <section class="mc-arhitect__masonry">
            <masonry
                    :cols="{default: 4, 1100: 3, 960: 2, 560: 1}"
                    :gutter="10"
            >
                <div v-for="(image, key) in images" :key="key" class="integration__img">
                    <img :src="image" alt="Изображение">
                </div>
            </masonry>
        </section>
        <feedback
                class="mc-arhitect__feedback"
                title="Записаться на курсы"
                info="Администратор свяжется с вами для подтверждения <br>
бронирования места в группе"
                :isMail="true"
        />
    </main>
</template>

<script>
    import Course from './../../sections/Course';
    import Feedback from './../../sections/Feedback';
    import Features from './../../sections/Features';
    import Program from './../../sections/Program';

    export default {
        name: "McArhitect",
        components: {
            Course,
            Feedback,
            Features,
            Program
        },
        data() {
            return {
                courseData: {
                    text: {
                        title: 'Мастер класс: "Архитектура бровей"',
                        text: [
                            'Трехдневный мастер-класс для начинающих: теория (от основ до колористики), инструментарий, технологии и техники, работа с клиентом, практика.                             3 дня. \n',
                            '<b>Студия предоставляет:</b>\n',
                            '- Расходные материалы\n',
                            '<b>Студенты обеспечивают самостоятельно:</b>\n',
                            '- Принести с собой: пинцет, ножницы, скошенную кисть\n',
                            '- Ищут моделей для отработок'
                        ]
                    },
                    note: {
                        title: 'Стоимость курса — 12000р',
                        text: 'Предоплата для бронирования – 2000р'
                    }
                },
                images: [
                    require('./../../../assets/img/masonry/image_1.jpg'),
                    require('./../../../assets/img/masonry/image_2.jpg'),
                    require('./../../../assets/img/masonry/image_3.jpg'),
                    require('./../../../assets/img/masonry/image_4.jpg'),
                    require('./../../../assets/img/masonry/image_5.jpg'),
                    require('./../../../assets/img/masonry/image_6.jpg'),
                    require('./../../../assets/img/masonry/image_7.jpg'),
                    require('./../../../assets/img/masonry/image_8.jpg')
                ],
                features: [
                    {
                        img: require('./../../../assets/img/features/icons_1.svg'),
                        title: 'Высокие стандарты обучения\n',
                        text: [
                            'Знания и навыки, передаваемые ученикам это уникальный опыт Александры Кириенко и её коллег, полученный в сотрудничестве со звездами и модными домами. Каждый аспект этих знаний выведен в стандарт обучения.'
                        ]
                    },
                    {
                        img: require('./../../../assets/img/features/icons_2.svg'),
                        title: 'Люксовая косметика\n',
                        text: [
                            'Практические занятия — отработка на моделях, проводится исключительно на косметике класса люкс. Это нужно для того, чтобы студенты понимали важность качества косметики как инструмента работы визажиста.'
                        ]
                    },
                    {
                        img: require('./../../../assets/img/features/icons_3.svg'),
                        title: 'Профессиональные преподаватели\n',
                        text: [
                            'Преподавательский состав формируется личной Александрой Кириенко — профессионалы из мира моды и красоты, с высоким уровнем экспертности \n' +
                            'и педагогическими навыками'
                        ]
                    }
                ],
                program: [
                    {
                        title: 'Теория+практика',
                        list: [
                            '<b>1 блок:Теория</b>',
                            '1.Знакомство с материалами и инструментами \n',
                            '2. Рабочее место \n',
                            '3. Обработка инструментов (виды дезинфекции). \n',
                            '4. Моделирование формы. (Гармоничные брови для разных форм и типов лица) \n',
                            '5. Формы бровей: - длина; - ширина; - направление. Коррекция проблемных бровей \n',
                            '6. Окрашивание бровей краской: - виды красок и их отличия \n',
                            '7. Колористика (смешивание оттенков, подбор идеального цвета) \n',
                            '8. Технологии коррекции бровей \n',
                            '9. Окрашивание ресниц краской \n',
                            '10. Макияж бровей: -техники -продукты -кисти \n',
                            '11. Особенности работы с клиентом \n',
                            '12. Тренды и тенденции ',
                            '<b>2 блок: Показ + отработка </b>',
                        ]
                    },
                    {
                        title: 'Теория+практика',
                        list: [
                            '<b>1 блок: Два показа и три отработки</b>',
                            '(Показы на разных красителях и в разных техниках)',
                            '<b>2 блок: </b>',
                            '- Теоретический тест \n',
                            '- Экзаменационная работа ',
                            '<b>3 блок:</b>',
                            'Вручение аттестатов и шампанское '
                        ]
                    }
                ]
            }
        }
    }
</script>

<style lang="less">
    .mc-arhitect {
        &__masonry {
            .wrapper();
        }
        &__features {
            padding-bottom: 40px;
        }
        &__program {
            padding: 140px 0;
            background-color: #fff;
        }
    }
</style>