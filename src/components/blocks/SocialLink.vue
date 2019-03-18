<template>
    <a class="social-link"
       :class="background"
    >Социальная ссылка</a>
</template>

<script>
    export default {
        name: "SocialLink",
        props: {
            'link': String
        },
        computed: {
            background() {
                return 'social-link--' + this.link
            }
        }
    }
</script>

<style lang="less">
    .social-link {
        display: block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        text-indent: -9999px;

        &--facebook {
            background-image: url('../../assets/img/socialLink/facebook.svg');
        }

        &--youtube {
            background-image: url('../../assets/img/socialLink/youtube.svg');
        }

        &--instagram {
            background-image: url('../../assets/img/socialLink/instagram.svg');
        }
    }
</style>