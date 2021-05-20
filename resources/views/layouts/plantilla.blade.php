
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

    <style>
    * {
    box-sizing: border-box;
}

body {
   
    color: #fff;
    line-height: 1.6;
    font-family: 'Quicksand', sans-serif;
    padding: 0 1.5em;
}

.container {
    max-width: 1170px;
    margin-left: auto;
    margin-right: auto;
    padding: 1.5em;
}

ul {
    list-style: none;
    padding: 0;
}

.logo {
    text-align: center;
    font-size: 3em;
   
}

.logo span {
    color: #0C5DF4;
}

.contact-wrapper {
    box-shadow: 0 0 20px 0 #0C5DF4;
}

.contact-wrapper > * {
    padding: 1rem;
  
}

.contact-form {
    background: #222222;
}

.contact-form form {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.contact-form form label {
    display: block;
    color: #00a6ff;
}

.contact-form form p {
    margin: 0;
    padding: 1em;
}

.contact-form form .block {
    grid-column: 1 / 3;
}


.contact-form form input,
.contact-form form textarea
 {
    width: 100%;
    padding: .7em;
    border: none;
    background: none;
    outline: 0;
    color: rgb(255, 255, 255);
    border-bottom: 1px solid #00a6ff;
    
    
}
.contact-form form button
 {
    width: 100%;
    padding: .7em;
    border: none;
    background: none;
    outline: 0;
    color: rgb(255, 255, 255);
    border-bottom: 1px solid #00a6ff;
    cursor: pointer;
    
}
.contact-form form input:focus{
    border-bottom: 1px solid #00ff08;
}
.contact-form form textarea:focus{
    border-bottom: 1px solid #00ff08;
}

.select{
    width: 100%;
    padding: .7em;
    border: none;
    background: none;
    background-color: #222222;
    outline: 0;
    color: #fff;
    border-bottom: 1px solid #00a6ff;
}

.contact-form form button {
    background: #0C5DF4;
    border: 0;
    text-transform: uppercase;
    padding: 1em;
}

.contact-form form button:hover,
.contact-form form button:focus {
    background: #37ca68;
    color: #fff;
    transition: background-color 0.4s ease-out;
    outline: 0;
}

/* CONTACT INFO */
.contact-info {
    background: #000;
}

.contact-info h4, .contact-info ul, .contact-info p {
    text-align: center;
    margin: 0 0 1rem 0;
}

/* LARGE SIZE */
@media(min-width: 700px) {
    
    .contact-wrapper {
        display: grid;
        grid-template-columns: 2fr 1fr;
        margin-top: 2rem;
        margin-left: 5rem;
        margin-right: 8rem;
    }
    .contact-wrapper > * {
        padding: 2em;
    }
    .contact-info h4,
    .contact-info ul,
    .contact-info p {
        text-align: left;
    }
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

:root{
    --main-color:rgba(255, 0, 0, 0.64);
    --color-dark:#1D2231;
    --text-grey:#FFFFFF;
}

.mainPrincipal{
    background-color:#000000;
}
body{
    background-color:#000000;
}

*{
    font-family: 'Poppins',sans-serif;
    margin:0;
    padding:0;
    text-decoration: none;
    list-style-type: none;
    box-sizing: border-box;
}
#sidebar-toggle{
    display:none;
}
.sidebar{
    height:100%;
    width:240px;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 100;
    
    background: linear-gradient(to left,var(--main-color), rgb(50, 0, 0));
    color: #fff;
    overflow-y:auto;
    transition: width 500MS;
}
.sidebar-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height:60px;
    padding: 0rem 1rem;
    font-size: 1.2rem;
   
}

.sidebar-menu{
    padding:  1rem;
   
}

.sidebar li {
    margin-bottom: 1.2rem;
}

.sidebar a {
    color: #fff;
    font-size: 1.1rem;
}

.sidebar a span:last-child {
    padding-left: .6rem;
    
}



.main-content{
    position: relative;
    margin-left: 240px;
    transition: margin-left 500MS;
  
}


header{
    position: fixed;
    left: 240px;
    top: 0;
   
    z-index:100;
    width: calc(100%-240px);
    background: #fff;
    height: 60px;
    padding: 0rem 1rem;
    display: flex;
    align-items: center;
    align-content: space-between;
    border-bottom: 1px solid #ccc;
    transition: left 500MS;
}
.search-wrapper{
    display: flex;
    align-items: center;
}
.search-wrapper input{
    border:0;
    outline: 0;
    padding: 1rem;
    height: 38px;
}
.social-icons{
    display: flex;
    align-items: center;
    
}
.social-icons span,
.social-icons div{
    margin-left: 1.2rem;   
}
.social-icons div{
    height: 38px;
    width: 38px;
    background-size:cover;
    background-repeat: no-repeat;
    background-image: url(../images/1.jpg);
    border-radius:50%;
}
main{
   
 
    background: #f1f5f9;
    min-height:90vh;
    padding: 0.5rem;
}
.dash-title{
    color:var(--color-dark);
    margin-bottom: 1rem;
}

  

.dash-cards{
    display:grid;
        width: 100%;  
    grid-column-gap: 2rem;
    display: flex;
   
    flex-flow:wrap;
}
@media screen and (max-width:1500px){
    .card-single{
        background: rgb(53, 53, 53);
        border-radius:7px;
        box-shadow: 6px 6px 5px #0c5df4;
        margin-bottom: 2rem;
        width: 22%;
        transition: 0.4s;
    }
}


@media screen and (max-width:1200px){
    .card-single{
        background: rgb(53, 53, 53);
        border-radius:7px;
        box-shadow: 6px 6px 5px #0c5df4;
        margin-bottom: 2rem;
        width: 30%;
        transition: 0.4s;
    }
   }
   @media screen and (max-width:950px){
    .card-single{
        background: rgb(53, 53, 53);
        border-radius:7px;
        box-shadow: 6px 6px 5px #0c5df4;
        margin-bottom: 2rem;
        width: 45%;
        transition: 0.4s;
    }
   }
@media screen and (max-width:700px){
    .card-single{
        background: rgb(53, 53, 53);
        border-radius:7px;
        box-shadow: 6px 6px 5px #0c5df4;
        margin-bottom: 2rem;
        width: 90%;
        transition: 0.4s;
    }
   }




.card-body{
    padding: 1.3rem 1rem;
    display: flex;
    align-items: center;
    color: #FFFFFF;
}
.card-body span{
    font-size: 1.5rem;
    color: #FFFFFF;
    padding-right: 1.4rem;
}

.card-body h5{
    color:var(--text-grey);
    font-size:1.7rem;
    text-align: center;
 }

 .card-body h4{
    color:var(--coloe-dark);
    font-size:.8rem;
    margin-top: .2rem;
 }
 .card-footer{
     padding: .2rem 1rem;
    background: rgb(65, 65, 65);
    width: 90%;
    color: #FFFFFF;
 }
 .recent{
     margin-top: 3rem;
     margin-bottom: 3rem;
 }
 .activity-grid{
    display: grid;
    grid-template-columns:75% 25%;
    grid-column-gap: 1.5rem;
 }
 .activity-card{
    background: #fff;
    border-radius:7px;
    width: 100%;
 }

 .summary-card,
 .bday-card{
    background: #fff;
    border-radius:7px;
 }
 .activity-card h3{
     color: var(--text-grey);
     margin: 1rem;
 }
 .activity-card table{
    width:100%;
    border-collapse: collapse;
}
.activity-card thead{
    background: #efefef;
    text-align: left;
}
th, td{
    font-size: .9rem;
    padding: 1rem 1rem;
    color: var(--color-dark);
}
td{
    font-size: .8rem;
}
tbody tr:nth-child(even){
    background: #f9fafc;
}

.badge{
    padding: .2rem 1rem;
    border-radius: 20px;
    font-weight: 700;
    font-size: .7rem;

}
.badge.success{
    background: #001EFF;
    color: #FFFFFF;
}
.badge.delete{
    background: #ff0000;
    color: #FFFFFF;
}
.badge.warning{
    background: #f0f6b2;
    color: orange;
}

.td-team{
    display: flex;
    align-items: center;
}

.img-1,
.img-2,
.img-3{
    height: 38px;
    width: 38px;
    border-radius: 50%;
    margin-left: -15px;
    border: 3px solid #efefef;
    background-size: cover;
    background-repeat: no-repeat;
}

.img-1{
    background-image: url(../images/1.jpg);
}
.img-2{
    background-image: url(../images/1.jpg);
}
.img-3{
    background-image: url(../images/1.jpg);
}

.summary-card{
    margin-bottom: 1.5rem;
    padding-top: .5rem;
    padding-bottom: .5rem;
}

.summary-single{
    padding: 5rem 1rem;
    display: flex;
    align-items:center;
}

.summary-single span{
    font-size: 1.5rem;
    color: #777;
    padding-right: 1rem;

}

.summary-single h5{
    color: var(--main-color);
    font-size: 1.1rem;
    margin-bottom: 0rem !important;

}

.summary-single small{
    font-weight: 700;
    color: var(--text-grey);
}
.bday-card{
    display: flex;
    align-items: center;
}
.bday-flex{
    padding: 1rem;
    margin-bottom: .3rem;
}

.bday-img{
    height: 60px;
    width: 60px;
    border-radius: 50%;
    border:3px solid #efefef;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(../images/1.jpg);
    margin-right: .7rem;
}
.text-center{
    text-align: center;
}
.text-center button{
    background: var(--main-color);
    color: #fff;
    border: 1px solid var(--main-color);
    border-radius: 4px;
    padding:.4rem 1rem;
}

#hide{
    display: none;
}


input#hide:checked ~ #prueba{
    width: 60px;
}

input#hide:checked ~ #prueba .sidebar-header h3 span{
    display:none;
}
input#hide:checked ~ #prueba li span:last-child{
    display:none;
}

input#hide:checked ~ #prueba .sidebar-header {
    display:flex;
    justify-content: center;
}
input#hide:checked ~ #prueba li {
    display:flex;
    justify-content: center;
}

input#hide:checked ~ #main-content{
    margin-left: 60px;
}

input#hide:checked ~ #main-content header{
   left: 60px;
}

@media only screen and (max-width:1200px){
    
    #prueba{
        width: 60px;
        z-index:150;
    }
    
    #prueba .sidebar-header h3 span{
        display:none;
    }
    #prueba li span:last-child{
        display:none;
    }
    
    #prueba .sidebar-header {
        display:flex;
        justify-content: center;
    }
    #prueba li {
        display:flex;
        justify-content: center;
    }
    
    #main-content{
        margin-left: 1rem;
    }
    
    #main-content header{
       left: 60px;
       width: calc(100% - 60px);
    }
    input#hide:checked ~ #prueba{
        width: 240px;
    }
    
    input#hide:checked ~ #prueba .sidebar-header h3 span{
        display:inline;
    }
    input#hide:checked ~ #prueba li span:last-child{
        display:inline;
    }
    
    input#hide:checked ~ #prueba .sidebar-header {
        display:flex;
        justify-content: space-between;
    }
    input#hide:checked ~ #prueba li {
        display: block;
    }
    
    input#hide:checked ~ #main-content{
        margin-left: 60px;
    }
    
    input#hide:checked ~ #main-content header{
       left: 60px;
       width: calc(100% - 60px);
    }

}

.image{
    width:97%;
    height:200px;
    
}

.card-single:hover{
    transform:scale(1.1);
    margin: 1rem;
    margin-bottom: 2rem;
    box-shadow: 6px 6px 6px  #3effb5;
}


.like__btn{
    padding: 6px 15px;
    background:#001EFF;
    font-size: 14px;
    font-family: "Open Sans",sans-serif;
    border: none;
    color: #efefef;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 30%;
}


/*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

/*===== VARIABLES CSS =====*/
:root{
  --nav-width: 92px;

  /*===== Colores =====*/
  --first-color: #0C5DF4;
  --bg-color: #12192C;
  --sub-color: #B6CEFC;
  --white-color: #FFF;
  
  /*===== Fuente y tipografia =====*/
  --body-font: 'Poppins', sans-serif;
  --normal-font-size: 1rem;
  --small-font-size: .875rem;
  
  /*===== z index =====*/
  --z-fixed: 100;
}


/*===== BASE =====*/
*,::before,::after{
  box-sizing: border-box;
}
body{
  position: relative;
  margin: 0;
  padding: 2rem 0 0 6.75rem;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  transition: .5s;
}
h1{
  margin: 0;
}
ul{
  margin: 0;
  padding: 0;
  list-style: none;
}
a{
  text-decoration: none;
}

/*===== l NAV =====*/
.l-navbar{
  position: fixed;
  top: 0;
  left: 0;
  width: var(--nav-width);
  height: 100vh;
  background-color: var(--bg-color);
  color: var(--white-color);
  padding: 1.5rem 1.5rem 2rem;
  transition: .5s;
  z-index: var(--z-fixed);
}

/*===== NAV =====*/
.nav{
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
}
.nav__brand{
  display: grid;
  grid-template-columns: max-content max-content;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 2rem;
}
.nav__toggle{
  font-size: 1.25rem;
  padding: .75rem;
  cursor: pointer;
}
.nav__logo{
  color: var(--white-color);
  font-weight: 600;
}

.nav__link{
  display: grid;
  grid-template-columns: max-content max-content;
  align-items: center;
  column-gap: .75rem;
  padding: .75rem;
  color: var(--white-color);
  border-radius: .5rem;
  margin-bottom: 1rem;
  transition: .3s;
  cursor: pointer;
  
}
.nav__link:hover{
  background-color: var(--first-color);
}
.nav__icon{
  font-size: 1.25rem;
}
.nav__name{
  font-size: var(--small-font-size);
}

/*Expander menu*/
.expander{
  width: calc(var(--nav-width) + 9.25rem);
}

/*Add padding body*/
.body-pd{
  padding: 2rem 0 0 16rem;
}

/*Active links menu*/
.active{
  background-color: var(--first-color);
}

/*===== COLLAPSE =====*/
.collapse{
  grid-template-columns: 20px max-content 1fr;
}
.collapse__link{
  justify-self: flex-end;
  transition: .5s;
}
.collapse__menu{
  display: none;
  padding: .75rem 2.25rem;
  transition: 2s;
}
.collapse__sublink{
  color: var(--sub-color);
  font-size: var(--small-font-size);
  
}
.collapse__sublink:hover{
  color: var(--white-color);
}

/*Show collapse*/
.showCollapse{
  display: block;
}

/*Rotate icon*/
.rotate{
  transform: rotate(180deg);
}






    </style>
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