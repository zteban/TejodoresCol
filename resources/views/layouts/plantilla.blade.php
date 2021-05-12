
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">
     <link href="{{ asset('css/styles.css')}}" rel="stylesheet">




    
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    
</head>
<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">

                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo" style="color: rgb(229, 255, 0);">TEJEDORESCOL</a>
                </div>
                <div class="nav__list">
                    <a href="{{route('tejido.index')}}" class="nav__link active">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Inicio</span>
                    </a>
                    <div  class="nav__link collapse">
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Tejidos</span>
                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>
                        <ul class="collapse__menu">
                            <a href="{{route('tejido.crear')}}" class="collapse__sublink">CREAR</a>
                            <a href="{{route('tejido.index')}}" class="collapse__sublink">BUSCAR</a>                          
                            <a href="{{route('tejido.index2')}}" class="collapse__sublink">GESTIONAR</a>
                        </ul>  
                    </div>
                    <div  class="nav__link collapse">
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Usuarios</span>
                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>
                        <ul class="collapse__menu">
                            <a href="{{route('usuario.crear')}}" class="collapse__sublink">CREAR</a>
                            <a href="{{route('usuario.index')}}" class="collapse__sublink">GESTIONAR</a>                   
                        </ul>
                    </div>
                    <a href="{{route('rol.index')}}" class="nav__link">
                        <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Roles</span>
                    </a>

                   
                   
                </div>
            </div>
            <a href="{{ route('logout') }}" class="nav__link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">CERRAR SESION</span>
            </a>
          
                

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>
    </div>
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    
    <!-- ===== MAIN JS ===== -->
    <script src="{{ asset('js/main.js')}}"></script>
   
    @yield('content')
    <script src="{{ asset('js/likes.js')}}"></script>
  
</body>

</html>