<template>
    <main class="makeup-basic">
        <course :courseData="courseData"/>
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

    export default {
        name: "MakeupBasic",
        components: {
            Course,
            Feedback
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
        }
        &__item{
            margin-top: 10px;
            .col();
        }
    }
</style>