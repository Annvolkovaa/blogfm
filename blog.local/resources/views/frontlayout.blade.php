<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('lib')}}/bs4/bootstrap.min.css" />
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
    <!-- Jquery -->
    <script type="text/javascript" src="{{asset('lib')}}/jquery-3.5.1.min.js"></script>
    <!-- BS4 Js -->
    <script type="text/javascript" src="{{asset('lib')}}/bs4/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    	<div class="container">
		  <a class="navbar-brand" href="{{url('/')}}">
			  <img class="img-fluid" src="{{asset('img/logo.png')}}"></img>
			</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="{{url('/')}}">Главная страница</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('all-categories')}}">Категории</a>
		      </li>
		      @guest
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('login')}}">Войти</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('register')}}">Зарегистрироваться</a>
		      </li>
		      @else
		      <li class="nav-item">
		        <a class="nav-link" href="{{url('save-post-form')}}">Добавить новость</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{url('logout')}}">Выйти</a>
		      </li>
		      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            	</form>
		      @endguest
		    </ul>
		  </div>
		</div>
	</nav>
	<!-- Get latest posts -->
	<main class="container mt-4">
		@yield('content')
	</main>
</body>
</html>