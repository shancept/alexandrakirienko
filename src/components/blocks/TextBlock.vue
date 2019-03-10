<template>
    <div class="text-block">
        <h2 class="text-block__title">{{title}}</h2>
        <p v-for="paragraph in text" class="text-block__text">{{paragraph}}</p>
    </div>
</template>

<script>
    export default {
        name: "TextBlock",
        props: {
            'title': String,
            'text': Array
        },
        computed: {

        }
    }
</script>

<style lang="less">

</style>