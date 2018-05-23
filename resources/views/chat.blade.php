<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chatroom</title>
    <link rel="stylesheet" href="/css/app.css?v=01">
</head>

<body>
<div class="bg-layer"></div>
<h1 class="chatroom-title">Chatroom with <img src="/assets/img/Vue.png" class="vue-v" height="65px" alt="v"></img><span
            class="vue-font">ue.js</span>
</h1>
<div class="chatroom-box">
    <div id="app">
        <div class="current-user-box">Current User :
            <span class="badge user-list" v-for="(user,index) in usersInRoom">@{{user.name}}</span>
        </div>
        <chat-log :messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage" username="{{Auth::user()->name}}"></chat-composer>
    </div>
</div>
</body>
<script src="/js/app.js"></script>
<style>

    @import url('https://fonts.googleapis.com/css?family=Heebo');

    html {
        height: 100%;
        overflow-x: hidden;
    }

    body {
        position: relative;
        font-family: Raleway, sans-serif;
        background-size: cover;
        background: linear-gradient(rgba(160, 163, 196, 0.45), rgba(246, 77, 85, 0.45)),
        url("{{asset('assets/img/background.jpg')}}") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        height: 100%;

        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .chatroom-title {
        text-align: center;
        margin: auto;
        font-weight: 900;
        font-size: 64px;
        color: #FFF;
        padding: 60px;
        text-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    }

    #app {
        z-index: 2000;
        height: 100%;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    }

    .current-user-box {
        padding: 3px 10px;
        background: #FFF;
        border-bottom: 1px solid rgba(0, 0, 0, 0.3);
    }

    .user-list {
        margin-right: 0.1rem;
    }

    .vue-v:hover {
        cursor: text;
        user-drag: none;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }

    .chatroom-box {
        width: 500px;
        margin: auto;
    }

    @media (max-width: 767.98px) {
        .chatroom-title {
            font-size: 40px;
            white-space: nowrap;
            padding: 30px 0px;
            font-weight: 700;
        }

        .chatroom-box {
            padding: 0px 20px;
            width: auto;
            margin: auto;
        }

        .vue-v {
            height: 40px;
        }

        .vue-font {
            display:none;
        }
    }

</style>
</html>