<template>
    <div class="text-block">
        <h2 class="text-block__title">{{title}}</h2>
        <p
                class="text-block__text"
                v-for="paragraph in text"
                v-html="paragraph"
        ></p>
    </div>
</template>

<script>
    export default {
        name: "TextBlock",
        props: {
            'title': String,
            'text': Array
        },
        computed: {}
    }
</script>

<style lang="less">
    .text-block {
        &__title {
            position: relative;
            margin-bottom: 40px;
            font-size: 32px;

            &::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 0;
                width: 140px;
                height: 9px;
                border-top: 3px solid #302D34;
                border-bottom: 3px solid #FBCFC4;
            }
        }
        &__text {
            font-size: 18px;
        }
    }
</style>