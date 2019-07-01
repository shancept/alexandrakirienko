<template>
    <main class="makeup-for-yourself">
        <course class="makeup-for-yourself__course" :courseData="courseData"/>
        <features class="makeup-for-yourself__features" :features="features" size="size-2"/>
        <program class="makeup-for-yourself__program" :program="program"/>
        <section class="makeup-for-yourself__masonry">
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
                class="makeup-for-yourself__feedback"
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
        name: "MakeupForYourself",
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
                        title: 'Курс "Мейкап для себя"',
                        text: [
                            'Самостоятельность в умении нанести мейкап — для многих это необходимость.<br> \n' +
                            'Специально для вас и создан этот курс:<br>\n' +
                            '1 день, 3 часа<br>\n' +
                            'программа курса это базис - дневной и вечерний макияж, и конечно - секреты.'
                        ]
                    },
                    note: {
                        title: 'Стоимость курса — 6000р',
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
                        title: 'Дневной базовый макияж',
                        list: [
                            '1. Этапы очищения. Как подготовить кожу к макияжу.\n',
                            '2. Sos-средства перед важным мероприятием.\n',
                            '3. Как правильно выбрать тон.\n',
                            '4. Секреты грамотного и деликатного скульптурирования.\n',
                            '5. Как сделать идеальные брови самостоятельно.\n',
                            '6.Как выбрать акцент для вечернего макияжа.\n',
                            '7.Какие продукты для вечернего макияжа глаз необходимы.\n',
                            '8.Кремовые и жидкие текстуры в макияже глаз.\n',
                            '9.Работа с сухими тенями. Какая палетка необходима именно Вам.\n',
                            '10.Как незаметно увеличить губы и исправить асимметрию.'
                        ]
                    },
                ]
            }
        }
    }
</script>

<style lang="less">
    .makeup-for-yourself {
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