<template>
    <section class="feedback">
        <div class="feedback__container">
            <h3 class="feedback__title">Хотите предложить сотрудничество?</h3>
            <p class="feedback__info">Оставьте ваше сообщение здесь или пишите на почту: <br>
                pr@aleksandrakirienko.com
            </p>
            <span class="feedback__success" v-if="formSuccess">Спасибо! Данные успешно отправлены.</span>
            <div class="feedback__form" v-else>
                <input
                        class="feedback__form-item"
                        type="text"
                        name="name"
                        placeholder="Ваше имя"
                        @input="errors.splice('name', 1)"
                        v-model="name"> <br>
                <input
                        class="feedback__form-item"
                        type="text"
                        name="phone"
                        placeholder="Телефон для связи"
                        @input="errors.splice('phone', 1)"
                        v-model="phone"> <br>
                <textarea
                        class="feedback__form-item"
                        name="message"
                        placeholder="Ваше предложение"
                        cols="30"
                        rows="4"
                        v-model="message">Ваше предложение</textarea> <br>
                <span class="feedback__error" v-if="errors.length === 2">Заполните пустые поля</span>
                <btn
                        @click="send"
                        class="feedback__btn"
                        title="Отправить"/>
            </div>
        </div>
    </section>
</template>

<script>
    import axios from 'axios';
    import Btn from './../blocks/Btn';

    export default {
        components: {
          Btn
        },
        data() {
            return {
                name: '',
                phone: '',
                message: '',
                errors: [],
                formSuccess: false
            }
        },
        methods: {
            send() {
                this.checkForm();
                if (this.errors.length === 0) {
                    let fd = new FormData;
                    fd.append('name', this.name);
                    fd.append('phone', this.phone);
                    fd.append('message', this.message);

                    axios.post('/api/feedback', fd, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }).then(res => {
                        if(res.data.result === 'success') {
                            this.formSuccess = true;
                        }
                    })
                }
            },
            checkForm() {
                if(this.name.trim().length === 0) {
                    this.errors.push({name: 'Имя не должно быть пустым'});
                }
                if(this.phone.trim().length === 0) {
                    this.errors.push({phone: 'Телефон не должно быть пустым'});
                }
            }
        }
    }
</script>

<style lang="less">
    .feedback {
        padding: 60px 0;
        text-align: center;
        background:
                -webkit-linear-gradient(top, rgba(247, 244, 239, 1), rgba(247, 244, 239, 0.90)),
                url("./../../assets/img/feedback/background.jpg") fixed;

        &__container {
            .wrapper();
        }
        &__title {
            font-size: 42px;
            .md-block({ font-size: 38px; });
            .sm-block({ font-size: 30px; });
        }
        &__info {
            font-size: 20px;
            .md-block({ font-size: 18px; });
            .sm-block({ font-size: 16px; });
        }
        &__success {
            display: block;
            max-width: 720px;
            margin: 0 auto;
            padding: 20px;
            font-size: 20px;
            color: #fff;
            background: #62C584;
            .md-block({ font-size: 18px; });
            .sm-block({ font-size: 16px; });
        }
        &__error {
            display: block;
            padding: 20px;
            font-size: 20px;
            color: #fff;
            background: #F95D51;
            .md-block({ font-size: 18px; });
            .sm-block({ font-size: 16px; });

        }
        &__form {
            max-width: 560px;
            margin: 0 auto;
        }
        &__form-item {
            width: 100%;
            padding: 20px 0;
            font-size: 16px;
            line-height: 1.33;
            border: 0;
            border-bottom: 1px solid #000;
            background: transparent;
            outline: none;
        }
        &__btn {
            margin-top: 20px;
            padding: 15px;

            &:hover {
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.4);
            }
        }
    }
</style>