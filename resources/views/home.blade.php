@extends('layouts.app1')

@section('content')
        <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/cabinetMenu.css') }}"/>
    <script src="js/modernizr.custom.js"></script>

</head>
<body>
<script src="{{asset('https://cdn.jsdelivr.net/npm/vue/dist/vue.js')}}"></script>
<div class="container">
    <form action="{{route('addProfileInfo')}}" method="post">
        @csrf
        <h1 class="lc">Личный кабинет</h1>
        <fieldset>
            <div class="">
                <div class="">Ваше имя или название организации</div>
                <input class="inp" id="name" name="name" type="text" placeholder=""
                       value='{{Auth::user()->name}}'>
                <div class="">Телефон</div>
                <input class="inp" id="phone" name="phone" type="text" placeholder="+79224789108"
                       value='{{Auth::user()->phone}}'>
                <div class="">Адрес</div>
                <input class="inp" id="adress" name="adress" type="text" placeholder=""
                       value='{{Auth::user()->adress}}'>
                <div class="">Инфо</div>
                <input class="inp" id="info" name="info" type="text" placeholder=""
                       value='{{Auth::user()->info}}'>
            </div>
            <div class="">
                <div class="">&nbsp;&nbsp;</div>
                <input class="btn btn-4 btn-4a" name="addProfileInfo" type="submit" value="Сохранить">
            </div>
        </fieldset>
    </form>
</div>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/borderMenu.js')}}"></script>
<script src="{{asset('js/Home.js')}}"></script>
</body>
</html>
@endsection
