<template>
    <section class="course">
        <div class="course__container">
            <div class="course__row  course__text-block">
                <div class="course__item  course__item-text">
                    <text-block
                        :title="courseData.text.title"
                        :text="courseData.text.text"
                    />
                </div>
                <div class="course__item  course__item-price">
                    <div class="course__price">
                        <h3>{{courseData.note.title}}</h3>
                        <span>{{courseData.note.title}}</span>
                    </div>
                    <span class="course__note">*при отказе от курса предоплата не возвращается</span>
                </div>
            </div>
            <div class="course__row  course__img-block">
                <div class="course__item  course__img-item">
                    <img src="./../../assets/img/course/image_1.png" alt="Изображение">
                </div>
                <div class="course__item  course__img-item">
                    <img src="./../../assets/img/course/image_2.png" alt="Изображение">
                </div>
                <div class="course__item  course__img-item">
                    <img src="./../../assets/img/course/image_3.png" alt="Изображение">
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';

    export default {
        name: "Course",
        components: {
            TextBlock
        },
        props: {
            courseData: Object
        },
    }
</script>

<style lang="less">
    .course {
        padding: 30px 0;

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
        &__text-block {}
        &__item-text{
            .size(8);
            .size-md(12);
        }
        &__item-price{
            .size(4);
            .size-md(12);
            align-self: flex-end;
        }
        &__price {
            position: relative;
            padding: 20px 20px 20px 60px;
            background-color: #fff;
            &::after {
                content: '';
                position: absolute;
                top: 10px;
                bottom: 10px;
                left: 0;
                width: 10px;
                background-color: #fbcfc4;
            }

            h3 {
                margin: 0;
                font-size: 16px;
            }

            span {
                margin: 0;
                font-size: 16px;
            }
        }
        &__note {
            display: block;
            margin: 5px 0 0;
            font-size: 12px;
            text-align: center;
        }
        &__img-block {
            padding-top: 60px;
            justify-content: center;
        }
        &__img-item {
            .size(4);
            .size-md(8);
            .size-xs(12);

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }
    }
</style>