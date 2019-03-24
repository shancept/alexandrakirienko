<template>
    <section class="program">
        <div class="program__container">
            <h2 class="program__main-title">Программа курса</h2>
            <div class="program__row">
                <div class="program__item" v-for="(item, key) in program" :key="key">
                    <div class="program__day">{{key + 1}} день</div>
                    <div class="program__progress"></div>
                    <div class="program__text-block">
                        <span class="program__ghost-day">{{key + 1}} день</span>
                        <h3 class="program__title" v-html="item.title"></h3>
                        <ul class="program__list">
                            <li
                                    v-for="(listItem, key) in item.list"
                                    :key="key"
                                    v-html="listItem"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Program",
        props: {
            program: Array
        }
    }
</script>

<style lang="less">
    .program {
        &__container{
            .wrapper();
        }
        &__row{
            .row-flex();
            justify-content: center;
        }
        &__item{
            .col();
            .size(10);
            .size-md(12);
            display: flex;

            &:last-child {
                .program__text-block {
                    padding-bottom: 0;
                }

                .program__progress {
                    &::after {
                        display: none;
                    }
                }
            }

        }

        &__main-title {
            margin-bottom: 80px;
            text-align: center;
        }

        &__day {
            width: 15%;
            font-size: 20px;
            font-weight: 600;
            text-align: right;
            .md-block({ display: none; });
        }
        &__ghost-day {
            display: none;
            font-size: 20px;
            font-weight: 600;
            .md-block({ display: block; font-size: 18px; });
        }
        &__progress {
            position: relative;
            width: 15%;

            &::before {
                content: '';
                position: absolute;
                top: 10px;
                left: 50%;
                margin-left: -8px;
                width: 16px;
                height: 16px;
                background-color: #000;
                border-radius: 50%;
            }

            &::after {
                content: '';
                position: absolute;
                top: 35px;
                bottom: 0px;
                left: 50%;
                margin-left: -1px;
                width: 2px;
                background-color: #d4d4d4;
            }

        }
        &__text-block {
            width: 70%;
            padding-bottom: 40px;
        }

        &__title {
            margin: 0 0 20px;
            font-size: 26px;
            .md-block({ font-size: 20px; });
        }

        &__list {
            font-size: 18px;
        }
    }
</style>