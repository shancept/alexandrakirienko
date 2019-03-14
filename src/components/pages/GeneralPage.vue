<template>
    <main class="page-content">
        <div class="page-content__alexandra-kirienko">
            <AlexandraKirienko/>
        </div>
        <div class="page-content__portfolio">
            <hr>
            <Portfolio/>
            слайдер
            <hr>
        </div>
        <div class="page-content__publications">
            <hr>
            <Publications/>
            <hr>
        </div>

        <hr>
        слайдер
        <hr>
        <div class="page-content__beauty-academy">
            <hr>
            <BeautyAcademy/>
            <hr>
        </div>
        <div class="page-content__wedding">
            <hr>
            <Wedding/>
            <hr>
        </div>
        <div class="page-content__integration">
            <hr>
            <Integration/>
            слайдер
            <hr>
        </div>
        <!--todo разве эти дивки нельзя запихать внутрь компонента?? -->
        <div class="page-content__feedback">
            <hr>
            <Feedback/>
            <hr>
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
    import Feedback from './../sections/Feedback';

    export default {
        name: "PageContent",
        components: {
            AlexandraKirienko,
            Portfolio,
            Publications,
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