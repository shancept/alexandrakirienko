<template>
    <sweet-modal class="course-rec" ref="modal" @close="modal = false">
        <!--//todo feedback -->
    </sweet-modal>
</template>

<script>
    import {SweetModal} from 'sweet-modal-vue';

    export default {
        components: {
            SweetModal,
        },
        computed: {
            modal: {
                get() {
                    return this.$store.state.modal;
                },
                set(value) {
                    this.$store.state.modal = value;
                }
            }
        },
        watch: {
            modal() {
                if(this.modal === true) {
                    this.$refs.modal.open();
                } else {
                    this.$refs.modal.close();
                }
            }
        }
    }
</script>

<style scoped>

</style>