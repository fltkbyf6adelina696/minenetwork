@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-lg-4 mx-auto">
       <h1>Регистрация</h1> 
<form method="POST" action="{{ route('auth.signup') }}" novalidate>
    @csrf
        <div class="form-group">
      <label for="email">Адрес электронной почты</label>
      <input type="email" name="email" 
      class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" 
      value="{{Request::old('email') ?: ''}}" >
      <div class="invalid-feedback">
        Пожалуйста, укажите адрес электронной почты.
      </div>
    </div>
    <div class="form group">
        <label for="username">Ник</label>
        <input type="username" name="username" 
        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="username"
        value="{{Request::old('username') ?: ''}}">
        <div class="invalid-feedback">
          Пожалуйста, укажите ник.
        </div>
        
      </div>
    <div class="form group">
      <label for="password">Пароль</label>
      <input type="password" name="password" 
      class="form-control{{ $errors->has('password') ? ' is-invalid' : ''}} " id="password" placeholder="минимум 6 символов"
      value="{{Request::old('password') ?: ''}}">
      <div class="invalid-feedback">
        Длина пароля должна быть не меньше 6 символов
      </div>
      
      
    </div>

    <div class="mb-3 form-check">
     
    </div>
    <button type="submit" class="btn btn-primary">Создать аккаунт</button>
    
  </form>

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
