<template>
    <section id="feedback" class="feedback">
        <div class="feedback__container">
            <h3 class="feedback__title" :class="titleColor">{{title}}</h3>
            <p class="feedback__info" :class="infoColor" v-html="info"></p>
            <span class="feedback__success" v-if="formSuccess">Спасибо! Данные успешно отправлены.</span>
            <div class="feedback__form" :class="color === 'white' ? 'feedback__form--white': ''" v-else>
                <input
                        class="feedback__form-item"
                        type="text"
                        name="name"
                        placeholder="Ваше имя"
                        :style="findError('name') !== false ? {'border-bottom': '1px solid red'} : ''"
                        @input="errors.splice('name', 1)"
                        v-model="name">
                <input
                        class="feedback__form-item"
                        type="text"
                        name="phone"
                        placeholder="Телефон для связи"
                        :style="findError('phone') !== false ? {'border-bottom': '1px solid red'} : ''"
                        @input="errors.splice('phone', 1)"
                        v-model="phone">
                <input
                        v-if="isMail"
                        class="feedback__form-item"
                        type="email"
                        name="email"
                        placeholder="Ваш email"
                        :style="findError('email') !== false ? {'border-bottom': '1px solid red'} : ''"
                        @input="errors.splice('email', 1)"
                        v-model="email">
                <textarea
                        v-else
                        class="feedback__form-item"
                        name="message"
                        placeholder="Ваше предложение"
                        cols="30"
                        rows="4"
                        v-model="message">Ваше предложение</textarea>
                <span class="feedback__error" v-if="errors.length >= 2">Заполните пустые поля</span>
                <btn
                        @click-btn="send"
                        class="feedback__btn"
                        :modifier="btn.modifier !== undefined ? btn.modifier : false"
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
        props: {
            title: {
                type: String,
                default: 'Хотите предложить сотрудничество?'
            },
            info: {
                type: String,
                default: 'Оставьте ваше сообщение здесь или пишите на почту: <br>\n' +
                'pr@aleksandrakirienko.com'
            },
            color: {
                type: String,
                default: 'black'
            },
            btn: {
                type: Object,
                default() { return {}}
            },
            isMail: {
                type: Boolean,
                default: false
            }
        },
        data() {
            return {
                name: '',
                phone: '',
                message: '',
                email: '',
                errors: [],
                formSuccess: false
            }
        },
        computed: {
            titleColor() {
                return this.color === 'white' ? 'feedback__title--white': '';
            },
            infoColor() {
                return this.color === 'white' ? 'feedback__info--white': '';
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
                    fd.append('email', this.email);

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
                if(this.email.trim().length === 0) {
                    this.errors.push({email: 'Почта не должна быть пустой'});
                }
            },
            findError(type) {
                for (let key in this.errors) {
                    if(this.errors[key][type] !== undefined) {
                        return this.errors[key][type]
                    }
                }
                return false
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

            &--white {
                color: #e6e6e6;
                font-weight: 600;
                font-size: 42px;
                line-height: 1.23;
            }
        }
        &__info {
            font-size: 20px;
            .md-block({ font-size: 18px; });
            .sm-block({ font-size: 16px; });

            &--white {
                color: #e6e6e6;
                font-weight: 300;
            }
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
            &--white &-item {
                color: #fff;
                border-bottom: 1px solid #e6e6e6;
            }
        }
        &__form-item {
            width: 100%;
            margin-bottom: 10px;
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