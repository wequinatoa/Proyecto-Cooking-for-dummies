

Route::filter('auth', function()
{
 if (Auth::guest()) return Redirect::to('login');
});


@layout('layout')
 
@section('titulo')
 
 Home
 
@endsection
 
@section('mensaje')
 
 Bienvenido a la home!
 
@endsection
 
@section('contenido')
 
    <p>{{ HTML::link('home/logout', 'Logout') }}</p> 
 
<!--con Auth::user() podemos acceder a los campos del usuario en la tabla usuarios -->
<!--En Auth::user() tenemos disponibles los datos del usuario que ha iniciado sesión como podemos ver-->
Bienvenido {{ Auth::user()->username }}, tu password es {{ Auth::user()->password }} y tu id de usuario es {{ Auth::user()->id }}!
 
@endsection