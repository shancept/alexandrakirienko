<template>
    <div
            class="text-block"
            :class="isModifier"
    >
        <h2
                v-if="title"
                class="text-block__title">{{title}}
        </h2>
        <p
                class="text-block__text"
                v-for="(paragraph, num) in paragraphs"
                v-html="paragraph"
                :key="num"
        ></p>
    </div>
</template>

<script>
    export default {
        name: "TextBlock",
        props: {
            'title': String,
            'text': Array,
            'modifier': String
        },
        computed: {
            paragraphs() {
                return this.text ? this.text : [];
            },
            isModifier() {
                return this.modifier ? ('text-block--' + this.modifier) : ''
            }
        }
    }
</script>

<style lang="less">
    .text-block {
        &__title {
            position: relative;
            margin-bottom: 40px;
            font-size: 32px;
            .md-block({ font-size: 26px; });
            .xs-block({ font-size: 24px; });

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
            //.md-block({ font-size: 14px; });
            //.xs-block({ font-size: 12px; });
        }

        &--no-margin {
            margin: 20px 0;
            p {
                margin: 0;
            }
        }
    }
</style>