<template lang="html">
    <div class="chat-composer">
        <input type="text" placeholder="Start typing your message" v-model="messageText"
               v-on:keydown.enter="sendMessage">
        <button class="btn btn-default btn-send glyphicon glyphicon-send" @click="sendMessage"></button>
    </div>
</template>

<script>
    export default {
        props: ['username'],
        data() {
            return {
                messageText: '',
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: {
                        name: this.username
                    }
                });
                this.messageText = "";
            }
        },

    }
</script>

<style lang="css">
    .btn-send {
        width: 50px;
        top: 0px;
        background-color: #F1F1F1;
    }

    .chat-composer {
        display: flex;
    }

    .chat-composer input {
        flex: 1 auto;
    }

    .chat-composer button {
        border-radius: 0;
    }
</style>