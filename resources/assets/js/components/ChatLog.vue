<template lang="html">

    <div id="chat-log" class="chat-log">
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

<style>
    .empty {
        padding: 1rem;
        text-align: center;
    }

    .chat-log {
        position: relative;
        width: 100%;
        background: #FFF;
        height: 600px;
        overflow-x: hidden;
        overflow-y: auto;
    }

    @media (max-width: 767.98px) {
        .chat-log {
            height: 450px;
        }
    }

    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-button {
        width: 0px;
        height: 0px;
    }

    ::-webkit-scrollbar-thumb {
        background: #98b2cf;
        border: 0px none #ffffff;
        border-radius: 50px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #a2bddc;
    }

    ::-webkit-scrollbar-thumb:active {
        background: #a2bddc;
    }

    ::-webkit-scrollbar-track {
        background: #9c9c9c;
        border: 0px none #ffffff;

    }

</style>