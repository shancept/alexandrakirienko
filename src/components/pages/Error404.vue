<template>
    <main class="page-content">
        <section class="error-404">
            <div class="error-404__container">Ошибка 404</div>
        </section>
    </main>
</template>

<script>
    export default {

    }
</script>

<style lang="less">
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
        }
    }

</style>