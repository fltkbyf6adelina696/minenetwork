<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup()//get прямо показывает пароль и email
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)//post скрывает информацию, которую надо скрыть //request- это запрос
    { //request- это запрос
       $this->validate($request,[
       'email' => 'required|unique:users|email|max:255',
       'username' => 'required|unique:users|alpha_dash|max:6', //alpha_dash там это проверяемое поле может содержать буквенно-цифровые символы, а также тире и подчеркивания
       'password' => 'required|min:6',
       ]);
      // dd($request);
     User::create([
      'email' => $request->input('email'),
      'username' => $request->input('username'),
      'password' => bcrypt($request->input('password')),//bcrypt — адаптивная криптографическая хеш-функция формирования ключа, используемая для защищенного хранения паролей
     ]);
     return redirect()->route('home')->with('info', 'Вы успешно зарегистрировались!');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
{
$this->validate($request,[
'email' => 'required|max:255',
'password' => 'required|min:6',
]);
 if (!Auth::attempt( $request->only(['email', 'password']), $request->has('remember'))) //attempt-авторизация
//if(!Auth::attempt(['email' => $email, 'password' => $password], $remember))
{
return redirect()->back()->with('info', 'Неправильный логин или пароль');
}
return redirect()->route('home')->with('info', 'Вы успешно авторизованы!');
}
 public function getSignout() {
     Auth::logout();

     return redirect()->route('home');
 }
}
