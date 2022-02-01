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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    
    <title>TECNOACADEMIA NACIONAL</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="container-fluid">
                    <h1 class="text-center text-light"><span class="badge badge-danger"></span>GESTIÓN DE APRENDICES</span></h1>
                </div>
            </div>
        </header>
        <br><br><br><br>
        <center><a class="btn btn-warning" href="{{url('aprendizregistro/create')}}">AGREGAR APRENDIZ</center></a>
        
        
        <div class="table-responsive">
            <table class="table table-light table-hover table-bordered" tyle="width:100%">
                <thead class="thead-light">
                    <tr>
                        <br>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                        <th>Tipo Documento</th>
                        <th>Número Identificación</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo Electrónico</th>
                        <th>Celular</th>
                        <th>Tel Acudiente</th>
                        <th>Institución Educativa</th>
                        <th>Grado</th>
                        <th>Línea</th>
                        
                        
                    </tr>
                </thead>
        
                <tbody>
                  @foreach ($aprendizregistro as $registroaprendiz)
                       <tr>
                           <td>{{$loop->iteration}}</td>
                           <td> 
                               <a class="btn btn-warning" href="{{url('/aprendizregistro/'.$registroaprendiz->id .'/edit')}}">
                                   Editar
                               </a>
                            |

                            <form class="d-inline" method="POST" action="{{url('/aprendizregistro/'.$registroaprendiz->id)}}" style="display:inline">
                                {{ csrf_field() }}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                            </form>
                           </td>
                           <td><img src=" {{ asset('storage').'/'.$registroaprendiz->foto}}" alt="" width="90"></td>
                           <td>{{ $registroaprendiz->tipodoc}}</td>
                           <td>{{ $registroaprendiz->numiden}}</td>
                           <td>{{ $registroaprendiz->nombre}}</td>
                           <td>{{ $registroaprendiz->apellidos}}</td> 
                           <td>{{ $registroaprendiz->email}}</td>
                           <td>{{ $registroaprendiz->cel}}</td>
                           <td>{{ $registroaprendiz->celularacud}}</td>
                           <td>{{ $registroaprendiz->institucionedu}}</td>
                           <td>{{ $registroaprendiz->grado}}</td>
                           <td>{{ $registroaprendiz->subarea}}</td>
                        
                        </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
        
    </div>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mCustomScrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>    
    
</body>
</html>
  