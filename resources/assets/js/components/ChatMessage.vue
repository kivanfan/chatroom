<template>
    <div class="chat-message">
        <span class="badge username">{{message.user.name}}</span> {{message.message}}
    </div>
</template>

<script>
    export default {
        props: ['message']
    }
</script>

<style>
    .chat-message {
        font-size:16px;
        padding: 0.6rem 1rem;
    }
    .username{
        margin-right:0.3rem;
    }
    .chat-message > p {
        margin-bottom: .5rem;
    }

    .chat-message:nth-child(odd) {
        background: #d7dee4;
    }

    .chat-message:nth-child(even) {
        background: #fcfcff;
    }
</style>