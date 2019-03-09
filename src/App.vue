<template>
    <div id="app" class="app">
        <PageHeader class="app__header"/>
        <PageContent class="app__main"/>
        <PageFooter class="app__footer"/>
    </div>
</template>

<script>
    import PageHeader from './components/page-header';
    import PageContent from './components/page-content';
    import PageFooter from './components/page-footer';


    export default {
        name: "App",
        components: {
            PageHeader,
            PageContent,
            PageFooter
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

    .app {
        display: flex;
        height: 100vh;
        flex-direction: column;

        &__header {
            //.block();
        }

        &__main {
            flex: auto;
            .block();
        }

        &__footer {
            flex-shrink: 0;
            .block();
        }
    }
</style>
