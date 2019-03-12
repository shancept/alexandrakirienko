<template>
    <div>
        <h3>Хотите предложить сотрудничество?</h3>
        <p>Оставьте ваше сообщение здесь или пишите на почту: <br>
            pr@aleksandrakirienko.com
        </p>
        <span v-if="formSuccess">Форма успешно отправлена</span>
        <input type="text" name="name" placeholder="Имя" v-model="name"> <br>
        <input type="text" name="phone" placeholder="Телефон для связи" v-model="phone"> <br>
        <textarea name="message" cols="30" rows="10" v-model="message">Ваше предложение</textarea> <br>
        <button @click="send">Отправить</button>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
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
                //todo проверка элементов формы на пустоту
            }
        }
    }
</script>

<style scoped>

</style>