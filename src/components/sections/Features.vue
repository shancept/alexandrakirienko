<template>
    <section class="features__features">
        <div class="features__container">
            <div class="features__row">
                <div
                        v-for="(feature, key) in features"
                        :key="key"
                        class="features__item"
                        :class="getSize"
                >
                    <feature :feature="feature"/>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import Feature from './../blocks/Feature';

    export default {
        name: "Features",
        components: {
            Feature,
        },
        props: {
            features: Array,
            size: {
                type: String,
                default: 'size-1'
            }
        },
        computed: {
            getSize() {
                return 'features__' + this.size
            }
        },
    }
</script>

<style lang="less">
    .features {
        padding: 60px 0;

        &__container {
            .wrapper();
        }
        &__row {
            .row-flex();
            justify-content: space-between;
        }
        &__item {
            margin-top: 10px;
            .col();

        }
        &__size-1 {
            .size(5.7);
            .size-md(12);
        }
        &__size-2 {
            .size(3.7);
            .size-md(12);
        }
    }
</style>