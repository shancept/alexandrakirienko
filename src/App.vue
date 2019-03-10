<template>
    <div id="app" class="app">
        <PageHeader class="app__header"/>
        <PageContent class="app__main"/>
        <PageFooter class="app__footer"/>
    </div>
</template>

<script>
    import PageHeader from './components/pages/PageHeader';
    import PageContent from './components/pages/PageContent';
    import PageFooter from './components/pages/PageFooter';

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
        }

        &__main {
            flex: auto;
        }

        &__footer {
            flex-shrink: 0;
            .block();
        }
    }
</style>
