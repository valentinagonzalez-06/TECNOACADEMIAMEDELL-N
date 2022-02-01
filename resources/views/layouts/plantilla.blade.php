<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome-font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
  <title>TECNOACADEMIA NACIONAL</title>
  
</head>
<body>

	<div class="wrapper">	
		<header>
			<div class="container">
				<div class=container-fluid">
					<div class="logo">
						<a href="index.html" title="logo"><img src="images/logo.png" alt="" height="50"></a>
					</div><!--logo end-->
					<nav>
						<ul>
							<li>
								<a href="" title="">
									<span><img src="images/inicio.png" width="30" alt=""></span>

									INICIO
								</a>
							</li>
							<li>
								<a href="" title="">
									<span><img src="images/institucion.png" width="30" alt=""></span>
									INST. EDUCATIVAS
								</a>
								<ul>
									<li><a href="" title=""></a></li>
									<li><a href="{{url('/aprendizregistro/')}}" title="">Registro Aprendiz</a></li>
                                    <li><a href="" title="">Información Contacto</a></li>
                                    <li><a href="" title="">Asignar Cupos</a></li>
								</ul>
							</li>
							<li>
								<a href="" title="">
									<span><img src="images/lineas.png" width="30" alt=""></span>
									LINEAS
								</a>
                              <ul>
									<li><a href="" title="">Horarios</a></li>
								</ul>
							</li>
							<li>
								<a href="" title="">
									<span><img src="images/formatos.png" width="30" alt=""></span>
									FORMATOS
								</a>
							</li>
							<li>
								<a href="" title="">
									<span><img src="images/estadisticas.png" width="30"alt=""></span>
									ESTADISTICAS
								</a>
                           </li>
						  
					 </ul>
				 </nav>
				 <div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                            </div>
						</div>
						
					</div>		
						    
					 

					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</header>
	</div>
    <main class="py-4">
      @yield('content')
    </main>


<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>