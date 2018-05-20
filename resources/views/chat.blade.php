<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chatroom</title>
    <link rel="stylesheet" href="/css/app.css?v=3">
</head>

<body>

@extends('layouts.app')
@section('content')
        <h1>chatroom</h1>
        <chat-log :messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage"></chat-composer>

@endsection
<script src="/js/app.js?v=3" charset="UTF-8"></script>
</body>
</html>