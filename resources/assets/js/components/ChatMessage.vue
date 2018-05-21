<template>
    <div class="chat-message">
        <span class="badge">{{message.user.name}}</span> {{message.message}}
    </div>
</template>

<script>
    export default {
        props: ['message']
    }
</script>

<style>
    .chat-message {
        font-size:24px;
        padding: 1rem;

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