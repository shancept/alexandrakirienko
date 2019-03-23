<template>
    <div class="feature">
        <div class="feature__head-block">
            <img :src="feature.img" alt="Изображение">
            <h3>{{feature.title}}</h3>
        </div>
        <div class="feature__text-block">
            <text-block :text="feature.text"/>
        </div>
    </div>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';

    export default {
        name: "Feature",
        components: {
            TextBlock
        },
        props: {
            feature: Object
        }
    }
</script>

<style lang="less">
    .feature {
        &__head-block{
            display: flex;
            align-items: center;

            img {
                width: 35px;
                margin-right: 15px;
            }

            h3 {
                font-size: 18px;
            }
        }
        &__text-block{}
    }
</style>