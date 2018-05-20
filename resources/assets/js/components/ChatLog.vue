<template lang="html">

    <div class="chat-log">
        <chat-message v-for="(message,index) in messages" :key="index" :message="message"></chat-message>
        <div class="empty" v-show="messages.length === 0">
            Nothing here yet!
        </div>
    </div>
</template>

<script>
    export default {
        props: ['messages']
    }
</script>

<style scoped>
    .empty {
        padding: 1rem;
        text-align: center;
    }
</style>