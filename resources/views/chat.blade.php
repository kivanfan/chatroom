<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chatroom</title>
    <link rel="stylesheet" href="/css/app.css?v=3">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Questrial" rel="stylesheet">
</head>

<body>
<div class="bg-layer"></div>
<h1 class="chatroom-title">Chatroom with <img src="/assets/img/Vue.png" class="vue-v" height="55px" alt="v"></img>ue.js
</h1>
<div class="chatroom-box">
    <div id="app">
        <div class="current-user-box">Current User:
            <span class="badge user-list" v-for="(user,index) in usersInRoom">@{{user.name}}</span>
        </div>
        <chat-log :messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage" username="{{Auth::user()->name}}"></chat-composer>
    </div>
</div>
</body>
<script src="/js/app.js"></script>
<style>
    html {
        height: 100%;
    }

    body {
        font-family: 'Questrial', sans-serif;
        background-size: cover;
        background: linear-gradient(rgba(160, 163, 196, 0.45), rgba(246, 77, 85, 0.45)),
        url("/assets/img/background.jpg");
    }

    .chatroom-title {
        text-align: center;
        margin: auto;
        font-weight: bold;
        font-size: 58px;
        color: #FFF;
        padding: 70px;
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
</style>
</html>