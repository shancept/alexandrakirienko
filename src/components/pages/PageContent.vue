<template>
    <main class="page-content">
        <div class="page-content__alexandra-kirienko">
            <AlexandraKirienko/>
        </div>
        <div class="page-content__portfolio">
            <Portfolio/>
        </div>
        <div class="page-content__publications">
            <Publications/>
        </div>
        <div class="page-content__beauty-academy">
            <BeautyAcademy/>
        </div>
        <div class="page-content__wedding">
            <Wedding/>
        </div>
        <div class="page-content__integration">
            <Integration/>
        </div>
    </main>
</template>

<script>
    import AlexandraKirienko from './../sections/AlexandraKirienko';
    import Portfolio from './../sections/Portfolio';
    import Publications from './../sections/Publications';
    import BeautyAcademy from './../sections/BeautyAcademy';
    import Wedding from './../sections/Wedding';
    import Integration from './../sections/Integration';

    export default {
        name: "PageContent",
        components: {
            AlexandraKirienko,
            Portfolio,
            Publications,
            BeautyAcademy,
            Wedding,
            Integration
        }
    }
</script>

<style lang="less">
    .page-content {

    }
</style>