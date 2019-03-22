<template>
    <main class="page-content">
        <section class="error-404">
            <div class="error-404__container">
                <div class="error-404__container--visor" ref="visor">
                    <img id="foo" src="../../assets/img/header/logo.png" alt="logo">
                </div>
            </div>
        </section>
        <div class="page-content__gradient"></div>
        <feedback
                class="page-content__feedback page-content__feedback--red"
                :title="'Контактная информация'"
                :info="'Для обсуждения возможного сотрудничества — <br> воспользуйтесь формой или пишите на почту.'"
                :color="'white'"
                :btn="{modifier: 'third'}"/>
    </main>
</template>

<script>
    import Feedback from './../sections/Feedback';
    export default {
        components: {
            Feedback
        },
        mounted() {
            document.addEventListener("mousemove", event => {
                let speed = 50;
                let x = -Math.floor((event.pageX)/speed-20) + "px";
                let y = -Math.floor((event.pageY)/speed) + "px";
                let elem = this.$refs.visor;
                elem.style.transform = 'translate('+x+' , '+y+')';
            }, false);
        }
    }
</script>

<style lang="less">
    .page-content__feedback--red {
        padding-top: 150px;
        padding-bottom: 150px;
        background: #400000;
    }
    .page-content {
        position: relative;
    }
    .page-content__gradient {
        min-height: 700px;
        height: 100vh;
        background-image: -webkit-gradient( linear, left top, left bottom, from(rgba(0,0,0,0.2)), to(rgba(64,0,0,1)) );
        background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.2), rgba(64,0,0,1));
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(64,0,0,1));
        position: absolute;
        left: 0;
        top: 0;
        z-index: 0;
        width: 100%;
    }
    .error-404 {
        min-height: 700px;
        height: 100vh;
        background-image: url("./../../assets/img/404/404.jpg");
        background-position: center center;
        background-attachment: scroll;
        background-repeat: no-repeat;
        background-size: cover;

        &__container {
            .wrapper();
            padding-top: 100px;
            &--visor {
                background-image: url("../../assets/img/header/logo.png");
                background-repeat: no-repeat;
                background-size: contain;
                width: 900px;
                & img {
                    filter: brightness(1000%);
                    width: 300px;
                    padding: 100px 0 300px;
                    margin: 0 auto;
                    display: block;
                }
            }
        }
    }

</style>