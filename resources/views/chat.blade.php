<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chatroom</title>
    <link rel="stylesheet" href="/css/app.css?v=3">
</head>

<body>

@extends('layouts.app')
@section('content')
    <h1>chatroom <span class="badge">@{{usersInRoom.length}}</span></h1>
    <chat-log :messages="messages"></chat-log>
    <chat-composer v-on:messagesent="addMessage"></chat-composer>
@endsection
</body>
</html>