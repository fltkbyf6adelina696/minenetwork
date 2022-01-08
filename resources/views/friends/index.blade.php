@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-lg-6">
    <h4>Друзья</h4>
        @if (!$friends->count())
        <p>У вас нет друзей</p>
        @else
        @foreach ($friends as $user)
        @include('user.partials.userblock')
        @endforeach
        @endif
    </div>

    <div class="col-lg-6">
        <h4>Запросы в друзья</h4>

        @if (!$requests->count())
        <p>У вас нет запросов в друзья</p>
        @else
        @foreach ($requests as $user)
        @include('user.partials.userblock')
        @endforeach
        @endif
    </div>
</div>

<style> 
    html { height: 100%; }
    body {
     margin: 0; /* Убираем отступы */
     height: 100%; /* Высота страницы */
     background: url("https://avatanplus.com/files/resources/mid/5bb22667259601662fe602f2.jpg"); /* Параметры фона */
     background-size: cover; /* Фон занимает всю доступную площадь */
    } 
   </style>
@endsection