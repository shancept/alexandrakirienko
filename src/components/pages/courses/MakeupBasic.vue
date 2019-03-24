<template>
    <main class="makeup-basic">
        <course class="makeup-basic__course" :courseData="courseData"/>
        <features class="makeup-basic__features" :features="features"/>
        <program class="makeup-basic__program" :program="program"/>
        <section class="makeup-basic__masonry">
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
                class="makeup-basic__feedback"
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
        name: "MakeupBasic",
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
                        title: 'Курс "Визажист"',
                        text: [
                            'Курс проходит на косметике студии класса ЛЮКС, выдается специально разработанное учебное пособие школы. Кисти студенты приобретают самостоятельно. <br>\n' +
                            'Модели для отработок предоставляются только иногородним студентам. <br>\n' +
                            '<b>Экспресс группа 10 дней. Курс проходит в группе до 10 человек.</b>'
                        ]
                    },
                    note: {
                        title: 'Стоимость курса — 35000р',
                        text: 'Предоплата для бронирования – 5000р'
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
                    },
                    {
                        img: require('./../../../assets/img/features/icons_4.svg'),
                        title: 'Диплом и фото для портфолио',
                        text: [
                            'После прохождения курса, каждый студент получает диплом академии красоты Александры Кириенко и несколько профессиональных, качественно отснятых и обработанных фотографий для своего портфолио.'
                        ]
                    }
                ],
                program: [
                    {
                        title: 'Теория',
                        list: [
                            '12:00 - 16:00',
                            'Введение в профессию, общая теория'
                        ]
                    },
                    {
                        title: 'Экспресс макияж',
                        list: [
                            '12:00-14:00 теория, формы лица,коррекция \n',
                            '14:00-15:00 кофе-брейк \n',
                            '15:00-16:00 показ \n',
                            '16:00-18:00 отработка на моделях '
                        ]
                    },
                    {
                        title: 'Дневной макияж в теневой технике',
                        list: [
                            '12:00-14:00 морфология глаз+брови \n',
                            '14:00-15:00 кофе-брейк \n',
                            '15:00-17:00 показ \n',
                            '17:00-19:00 отработка на моделях '
                        ]
                    },
                    {
                        title: 'Вечерний макияж в карандашной технике',
                        list: [
                            '12:00-14:00 колористика \n',
                            '14:00-15:00 кофе-брейк \n',
                            '15:00-17:00 показ \n',
                            '17:00-19:00 отработка на моделях'
                        ]
                    },
                    {
                        title: 'Смоки',
                        list: [
                            '12:00-14:00 показ \n',
                            '14:00-15:00 кофе-брейк \n',
                            '15:00-18:00 отработка на моделях'
                        ]
                    },
                    {
                        title: 'Свадебный макияж',
                        list: [
                            '12:00-13:00 теория \n',
                            '13:00-15:00 показ \n',
                            '15:00-16:00 кофе-брейк \n',
                            '16:00-19:00 отработка на моделях '
                        ]
                    },
                    {
                        title: 'Hollywood',
                        list: [
                            '12:00-14:00 показ \n',
                            '14:00-15:00 кофе-брейк \n',
                            '15:00-18:00 отработка на моделях '
                        ]
                    },
                    {
                        title: 'Insta-мэйк',
                        list: [
                            '12:00-13:00 теория \n',
                            '13:00-15:00 показ \n',
                            '15:00-16:00 кофе-брейк \n',
                            '16:00-19:00 отработка на моделях'
                        ]
                    },
                    {
                        title: 'Возрастной макияж',
                        list: [
                            'Начало в 12:00 \n',
                            '12:00-14:00 показ \n',
                            '14:00-15:00 кофе-брейк \n',
                            '15:00-18:00 отработка на моделях'
                        ]
                    },
                    {
                        title: 'Экспресс макияж',
                        list: [
                            'Начало в 12:00 \n',
                            '12:00-14:00 макияж для моделей \n',
                            '14:00-15:00 фото \n',
                            '15:00-16:00 вручение дипломов, шампанское'
                        ]
                    },
                ]
            }
        }
    }
</script>

<style lang="less">
    .makeup-basic {
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