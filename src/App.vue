<template>
    <div id="app" class="app">
        <PageHeader class="app__header"/>
        <router-view class="app__main"/>
        <PageFooter class="app__footer"/>
        <sweet-modal ref="modal">This is an alert.</sweet-modal>
    </div>
</template>

<script>
    import PageHeader from './components/header/Index';
    import PageFooter from './components/footer/Index';
    import { SweetModal } from 'sweet-modal-vue'

    export default {
        name: "App",
        components: {
            PageHeader,
            PageFooter,
            SweetModal
        },
        mounted() {
            if(this.$cookie.get('modal-promo') === null) {
                this.$cookie.set('modal-promo', true);
                setTimeout(() => {this.$refs.modal.open()}, 10000);
            }
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
