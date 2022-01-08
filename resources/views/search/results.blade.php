@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Результаты поиска: "{{ Request::input('query') }}"</h3>

    @if (!$users->count())
    <p>Пользователь не найден</p>
    @else 
   
    <div class="row">
        <div class="col-lg-6">
            @foreach ($users as $user) 
@include('user.partials.userblock')
 @endforeach 
        </div>
    </div>
   
    @endif 
    </div>
</div>



@endsection



























<style> 
    html { height: 100%; }
    body {
     margin: 0; /* Убираем отступы */
     height: 100%; /* Высота страницы */
     background: url("https://avatanplus.com/files/resources/mid/5bb22667259601662fe602f2.jpg"); /* Параметры фона */
     background-size: cover; /* Фон занимает всю доступную площадь */
    } 
   </style>