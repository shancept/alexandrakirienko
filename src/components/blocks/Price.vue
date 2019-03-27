<template>
    <div class="price">
        <div class="price__img">
            <img :src="priceData.img" alt="Изображение">
        </div>
        <h3 class="price__title">{{priceData.title}}</h3>
        <div class="price__price">{{priceData.price}}</div>
        <text-block
                :text="priceData.text"
                modifier="no-margin"
        />
        <btn
                class="price__btn"
                @click-btn="click"
                :to="priceData.btn.href"
                :title="priceData.btn.text"
        />
    </div>
</template>

<script>
    import TextBlock from './TextBlock';
    import Btn from './Btn';

    export default {
        name: "Price",
        components: {
            TextBlock,
            Btn
        },
        props: {
            priceData: Object
        },
        methods: {
            click() {
                this.$store.state.modal = true
            }
        }
    }
</script>

<style lang="less">
    .price {
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
