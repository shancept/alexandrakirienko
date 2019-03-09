<template>
    <nav class="main-nav">
        <ul class="main-nav__list">
            <li class="main-nav__item">
                <a class="main-nav__link">Портфолио</a>
            </li>
            <li class="main-nav__item">
                <a class="main-nav__link">Обучение</a>
            </li>
            <li class="main-nav__item">
                <a class="main-nav__link">Коллаборации</a>
            </li>
            <li class="main-nav__item">
                <a class="main-nav__link">Биография</a>
            </li>
            <li class="main-nav__item">
                <a class="main-nav__link">Сотрудничество</a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "MainNav"
    }
</script>

<style lang="less">
    .main-nav {
        &__list {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 0;
            .md-block({ flex-direction: column; padding: 30px 0;});
                    }
        &__item {
            margin: 10px 15px;
            cursor: pointer;
        }
        &__link {
            position: relative;
            font-size: 14px;
            font-weight: bold;
            color: #000;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: color 0.3s ease-in-out;

            &::after {
                content: '';
                position: absolute;
                left: 0;
                bottom: 10%;
                opacity: 0;
                width: 100%;
                height: 2px;
                border-bottom: 0px solid #fbcfc4;
                box-shadow: inset 0px -1px 0px 0px #fbcfc4;
                transition: all 0.3s ease;
            }

            &:hover {
                color: #fbcfc4;
                text-decoration: none;
                transition: color 0.3s ease-in-out;

                &::after {
                    opacity: 1;
                }
            }
        }
    }
</style>