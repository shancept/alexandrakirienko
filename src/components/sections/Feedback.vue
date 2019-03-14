<template>
    <div>
        <h3>Хотите предложить сотрудничество?</h3>
        <p>Оставьте ваше сообщение здесь или пишите на почту: <br>
            pr@aleksandrakirienko.com
        </p>
        <span v-if="formSuccess">Форма успешно отправлена</span>
        <div v-else>
            <input
                    type="text"
                    name="name"
                    placeholder="Имя"
                    @input="errors.splice('name', 1)"
                    v-model="name"> <br>
            <input
                    type="text"
                    name="phone"
                    placeholder="Телефон для связи"
                    @input="errors.splice('phone', 1)"
                    v-model="phone"> <br>
            <textarea name="message" cols="30" rows="10" v-model="message">Ваше предложение</textarea> <br>
            <span v-if="errors.length === 2">Заполните пустые поля</span>
            <button @click="send">Отправить</button>
        </div>
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

<style scoped>

</style>