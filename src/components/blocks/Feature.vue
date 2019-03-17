<template>
    <div class="feature">
        <div class="feature__img">
            <img :src="featureData.img" alt="Изображение">
        </div>
        <h3 class="feature__title">{{featureData.title}}</h3>
        <div class="feature__price">{{featureData.price}}</div>
        <text-block
                :text="featureData.text"
                modifier="no-margin"
        />
        <btn
                class="feature__btn"
                :href="featureData.btn.href"
                :title="featureData.btn.text"
        />
    </div>
</template>

<script>
    import TextBlock from './TextBlock';
    import Btn from './Btn';

    export default {
        name: "Feature",
        components: {
            TextBlock,
            Btn
        },
        props: {
            featureData: Object
        },
    }
</script>

<style lang="less">
    .feature {
        display: flex;
        flex-direction: column;
        height: 100%;

        &__img {
            margin-bottom: 10px;

            img {
                width: 100%;
                object-fit: cover;
                /*object-position: top center;*/
            }
        }
        &__title {
            margin: 0;
        }
        &__price {
            color: #fbcfc4;
        }
        &__text {
        }
        &__btn {
            width: 140px;
            margin-top: auto;
        }
    }
</style>
