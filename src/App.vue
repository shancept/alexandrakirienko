<template>
    <div id="app" class="app">
        <PageHeader class="app__header"/>
        <router-view class="app__main"/>
        <PageFooter class="app__footer"/>
        <modal/>
        <!--<div class="debug">-->
            <!--<div>-->
                <!--<div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                    <!--<div></div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    </div>
</template>

<script>
    import PageHeader from './components/header/Index';
    import PageFooter from './components/footer/Index';
    import Modal from './components/modal/CourseRec'

    export default {
        name: "App",
        components: {
            PageHeader,
            PageFooter,
            Modal
        },
        data() {
            return {
                data: {}
            }
        },
        methods: {},
        computed: {}
    }
</script>

<style lang="less">
    @import "./assets/fonts/font.css";
    @import "./assets/global/normalize.css";
    @import "./assets/global/scaffolding.less";

    .debug {
        .debug(rgba(255, 62, 47, 0.3), 1px solid black);
    }

    .app {
        display: flex;
        height: 100vh;
        flex-direction: column;

        &__header {
        }

        &__main {
            flex: auto;
        }

        &__footer {
            flex-shrink: 0;
        }
    }
</style>
