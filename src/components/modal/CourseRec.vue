<template>
    <sweet-modal class="course-rec" ref="modal">
        <img src="./../../assets/img/modal/lead.png" alt="modal image">
        <div class="course-rec__text-block">
            <h3 class="course-rec__title">Набор в группу уже открыт!</h3>
            <p>Курс проходит на косметике студии класса ЛЮКС, выдается специально разработанное учебное пособие школы.
                Кисти студенты приобретают самостоятельно. <br>
                <b>Экспресс группа 10 дней. Курс проходит в группе до 10 человек.</b>
            </p>
            <div class="course-rec__btn">
                <!--todo cссылка на курс-->
                <btn href="#" modifier="second" title="Узнать подробнее"/>
            </div>
        </div>
    </sweet-modal>
</template>

<script>
    import {SweetModal} from 'sweet-modal-vue';
    import Btn from './../blocks/Btn'

    export default {
        components: {
            SweetModal,
            Btn
        },
        mounted() {
            if(this.$cookie.get('modal-promo') === null) {
                this.$cookie.set('modal-promo', true);
                setTimeout(() => {this.$refs.modal.open()}, 10000);
            }
        },
    }
</script>

<style lang="less">
    .sweet-modal {
        max-width: 560px;
        .xs-block({ min-width: 100%; })
    }

    .sweet-modal .sweet-box-actions .sweet-action-close:hover {
        background: #fbcfc4;
    }

    .sweet-content {
        padding: 0 !important;
    }

    .course-rec {
        &__title {
            font-size: 30px;
        }
        &__text-block {
            padding: 0 50px;
            p {
                text-align: center;
            }
        }
        &__btn {
            padding: 20px 0;
            width: 200px;
            margin: 0 auto;
        }
    }
</style>