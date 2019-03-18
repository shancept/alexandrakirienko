<template>
    <section class="integration">
        <div class="integration__text-block">
            <div class="integration__container">
                <text-block
                        title="Коллаборации & интеграции"
                        :text="text"
                        modifier="no-margin"
                />
            </div>
        </div>
        <div class="integration__slider">
123
        </div>
    </section>
</template>

<script>
    import TextBlock from './../blocks/TextBlock';

    export default {
        name: "Integration",
        components: {
            TextBlock
        },
        data() {
            return {
                text: [
                    'Совместные работы с брендами, селебрити и модными домами — это интересный опыт',
                    'и безусловно полезный для всех участников формат взаимодействия.'
                ]
            }
        }
    }
</script>

<style lang="less">
    .integration {
        
        &__text-block {
            padding: 20px 0;
        }

        &__slider {
            background-color: #fff;
        }

        &__container {
            .wrapper();
        }

        &__row {
            .row-flex();
        }

        &__item {
            .col();
        }
    }
</style>