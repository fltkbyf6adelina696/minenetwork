<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <div class="container">
    <a class="navbar-brand" href=" {{ route ('home')}}">Социальная сеть</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @if (Auth::check())
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Стена</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('friend.index') }}">Друзья</a>
        </li>
        <form method="GET" action="{{ route('search.results') }}" class="form-inline my-2 my-lg-0">
        <input name="query" class="form-control mr-sm-2" type="search" placeholder="Найти..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0">Поиск</button>
        </form>
      </ul>
    @endif
     <ul class ="navbar-nav mr-auto">
       @if (Auth::check())
       <li class="nav-item"><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}" class="nav-link">{{ Auth::user()->getNameOrUsername() }}</a></li>
       <li class="nav-item"><a href="{{ route('profile.edit') }}" class="nav-link">Обновить профиль</a></li>
       <li class="nav-item"><a href="{{ route('auth.signout')}}" class="nav-link">Выйти</a></li>
       @else 
       <li class="nav-item"><a href="{{ route('auth.signup')}}" class="nav-link">Зарегистрироваться</a></li>
       <li class="nav-item"><a href="{{ route('auth.signin')}}" class="nav-link">Войти</a></li>
    @endif 
     </ul>
    </div>
    </div>
  </nav>