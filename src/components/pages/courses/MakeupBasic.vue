<template>
    <main class="makeup-basic">
        <course :courseData="courseData"/>
        <div class="makeup-basic__features">
            <div class="makeup-basic__container">
                <div class="makeup-basic__row">
                    <div v-for="(feature, key) in features" :key="key" class="makeup-basic__item  makeup-basic__feature">
                        <feature :feature="feature"/>
                    </div>
                </div>
            </div>
        </div>
        <section class="makeup-basic">
            <div class="makeup-basic__container">
                <masonry
                    :cols="{default: 4, 1100: 3, 960: 2, 560: 1}"
                    :gutter="10"
                >
                    <div v-for="(image, key) in images" :key="key" class="integration__img">
                        <img :src="image" alt="Изображение">
                    </div>
                </masonry>
            </div>
        </section>
        <feedback class="makeup-basic__feedback"/>
    </main>
</template>

<script>
    import Course from './../../sections/Course';
    import Feedback from './../../sections/Feedback';
    import Feature from './../../blocks/Feature';

    export default {
        name: "MakeupBasic",
        components: {
            Course,
            Feedback,
            Feature
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
                ]
            }
        }
    }
</script>

<style lang="less">
    .makeup-basic {
        &__container{
            .wrapper();
        }
        &__row{
            .row-flex();
            justify-content: space-between;
        }
        &__item{
            margin-top: 10px;
            .col();
        }
        &__features {
            padding: 60px 0;
        }
        &__feature {
            .size(5.8);
            .size-md(12);
        }
    }
</style>