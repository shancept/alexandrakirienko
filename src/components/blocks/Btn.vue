<template>
    <a
        class="btn"
       :class="isModifier"
    >{{title}}</a>
</template>

<script>
    export default {
        name: "Btn",
        props: {
            'title': String,
            'modifier': String
        },
        computed: {
            isModifier() {
                return this.modifier ? ('btn--' + this.modifier) : ''
            }
        }
    }
</script>

<style lang="less">
    .btn {
        display: block;
        padding: 10px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        color: #000;
        border: 1px solid #000;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.4s ease-in-out, color 0.4s ease-in-out, border-color 0.4s ease-in-out, box-shadow 0.4s ease-in-out;

        &:hover {
            text-decoration: none;
            color: #000;
            background-color: #FBCFC4;
            border: 1px solid #FBCFC4;
            transition: background-color 0.4s ease-in-out, color 0.4s ease-in-out, border-color 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
        }

        &:focus {
            color: #000;
        }

        &--second {
            background-color: #FBCFC4;
            border: 1px solid #FBCFC4;

            &:hover {
                border: 1px solid #000;
            }
        }
    }
</style>