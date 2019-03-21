<template>
    <main class="page-content">
        <alexandra-kirienko class="page-content__alexandra-kirienko"/>
        <portfolio class="page-content__portfolio"/>
        <publications class="page-content__publications"/>
        <articles class="page-content__articles"/>
        <beauty-academy class="page-content__beauty-academy"/>
        <Wedding class="page-content__wedding"/>
        <integration class="page-content__integration"/>
        <feedback class="page-content__feedback"/>
    </main>
</template>

<script>
    import AlexandraKirienko from './../sections/AlexandraKirienko';
    import Portfolio from './../sections/Portfolio';
    import Publications from './../sections/Publications';
    import Articles from './../sections/Articles';
    import BeautyAcademy from './../sections/BeautyAcademy';
    import Wedding from './../sections/Wedding';
    import Integration from './../sections/Integration';
    import Feedback from './../sections/Feedback';

    export default {
        name: "PageContent",
        components: {
            AlexandraKirienko,
            Portfolio,
            Publications,
            Articles,
            BeautyAcademy,
            Wedding,
            Integration,
            Feedback
        }
    }
</script>

<style lang="less">
    .page-content {

    }
</style>