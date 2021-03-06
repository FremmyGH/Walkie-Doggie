@extends('layouts.app1')

@section('content')
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div class="main">
    <form action="{{route('addProfileInfo')}}" method="post">
        @csrf
        <h1>Личный кабинет</h1>
        <fieldset>
            <div class=""> 
                <div class="">Ваше имя или название органищации</div> <input id="name" name="name" type="text" placeholder="" value = '{{Auth::user()->name}}' >
                <div class="">Телефон</div> <input id="phone" name="phone" type="text" placeholder="+79224789108" value = '{{Auth::user()->phone}}' >
                <div class="">Адрес</div> <input id="adress" name="adress" type="text" placeholder="" value = '{{Auth::user()->adress}}' >
                <div class="">Инфо</div> <input id="info" name="info" type="text" placeholder="" value = '{{Auth::user()->info}}' >
            </div>
            <div class=""> 
                <div class="">&nbsp;&nbsp;</div> <input  name="addProfileInfo" type="submit" value="Сохранить" ></div>
            </div>
        </fieldset>
    </form>
    @if (isset($dogs))
    @foreach ($dogs as $dog)
        <p> 
            {{$dog->name}} 
             <a href = "{{route('walkDog', $dog->id)}}"> Выгулять </a>
            <a href = "{{route('editDog', $dog->id)}}"> Редактировать </a>
            <a href = ""> Удалить </a>
        </p>
    @endforeach
    @endif

    @if (isset($dogInfo))
    <form action="{{route('editDog', $dogInfo['id'])}}" method="post">
    @else
    <form action="{{route('addDog')}}" method="post">
    @endif
        @csrf
        @if (isset($dogInfo))
        <h1>Редактирование собаки</h1>
        @else
        <h1>Добавление собаки</h1>
        @endif
        <h1><?php if (isset($messageForDogs)) echo $messageForDogs ?> </h1>
        <fieldset>
            <div class="">
                @if (isset($dogInfo))
                <div class="">name</div> <input id="name" name="name" type="text" placeholder="name" value = {{$dogInfo['name']}} >
                <div class="">age</div> <input id="age" name="age" type="text" placeholder="age" value = {{$dogInfo['age']}} >
                <div class="">sex</div> <input id="sex" name="sex" type="text" placeholder="sex" value = {{$dogInfo['sex']}} >
                <div class="">breed</div> <input id="breed" name="breed" type="text" placeholder="breed" value = {{$dogInfo['breed']}} >
                <div class="">size</div> <input id="size" name="size" type="text" placeholder="size" value = {{$dogInfo['size']}} >
                <div class="">info</div> <input id="info" name="info" type="text" placeholder="info" value = {{$dogInfo['info']}} >
                @else
                <div class="">name</div> <input id="name" name="name" type="text" placeholder="name" value = '' >
                <div class="">age</div> <input id="age" name="age" type="text" placeholder="age" value = '' >
                <div class="">sex</div> <input id="sex" name="sex" type="text" placeholder="sex" value = '' >
                <div class="">breed</div> <input id="breed" name="breed" type="text" placeholder="breed" value = '' >
                <div class="">size</div> <input id="size" name="size" type="text" placeholder="size" value = '' >
                <div class="">info</div> <input id="info" name="info" type="text" placeholder="info" value = '' >
                @endif
            </div>
            <div class=""> 
                @if (isset($dogInfo))
                <div class="">&nbsp;&nbsp;</div> <input  name="addDog" type="submit" value="Сохранить" ></div>
                @else
                <div class="">&nbsp;&nbsp;</div> <input  name="addDog" type="submit" value="Добавить" ></div>
                @endif
            </div>
        </fieldset>
    </form>
    <fieldset>
        @if (isset($walkDog))
        <form action="{{ route('walkDog', $walkDog['id']) }}" method="post" >
            <h2>Выгулять "{{$walkDog['name']}}"</h2>

            <div class="">adress</div> <input id="adress" name="adress" type="text" placeholder="adress" value = "{{ Auth::user()['adress'] }}" >

            <div class="">dt_w_start</div> <input id="dt_w_start" name="dt_w_start" type="date" placeholder="dt_w_start" value = "" >
            </div> <input id="dt_w_start" name="dt_w_start" type="time" placeholder="dt_w_start" value = "" >

            <div class="">dt_w_duration</div> <input id="dt_w_duration" name="dt_w_duration" type="text" placeholder="dt_w_duration" value = "" >

            <div class="">price</div> <input id="price" name="price" type="text" placeholder="price" value = "" >

            <div class="">&nbsp;&nbsp;</div> <input  name="walkDog" type="submit" value="Выгулять" ></div>
        </form>
        @endif
    </fieldset>
</div>
</body>
</html>
@endsection
