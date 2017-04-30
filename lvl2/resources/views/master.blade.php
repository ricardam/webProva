<!DOCTYPE html>
<html>

<script type"text/javascript" src="/path/bootstrap-dropdown-checkbox.js"></script>
  
    <head>
        <title>@yield('titol')</title>
         <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
         
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link href="jquery.multiselect.css" rel="stylesheet" type="text/css">
 

     <style>                    

            .background{

            background-color: #A9F5A9;
            background-position: center center;
            background-size: cover;


            }

            .container{
            background-color: white;
            background-position: center center;
            background-size: cover;

            }

            .carousel,.item,.active{height:50%;}
            .carousel-inner{height:200px;}

        body {
            padding-top: 50px;
          }

        ul,li { margin:0; padding:0; list-style:none;}
          
            .label { color:#000; font-size:16px;}

            .dropdown.dropdown-lg .dropdown-menu {
                margin-top: -1px;
                padding: 6px 20px;
            }
            .input-group-btn .btn-group {
                display: flex !important;
            }
            .btn-group .btn {
                border-radius: 0;
                margin-left: -1px;
            }
            .btn-group .btn:last-child {
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
            }
            .btn-group .form-horizontal .btn[type="submit"] {
              border-top-left-radius: 4px;
              border-bottom-left-radius: 4px;
            }
            .form-horizontal .form-group {
                margin-left: 0;
                margin-right: 0;
            }
            .form-group .form-control:last-child {
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px;
            }

          @media screen and (min-width: 768px) {
              #adv-search {
                  width: 500px;
                  margin: 0 auto;
              }
              .dropdown.dropdown-lg {
                  position: static !important;
              }
              .dropdown.dropdown-lg .dropdown-menu {
                  min-width: 500px;
              }
          }

          #hearts { color: #ee8b2d;
                    margin-left: 50px}
          #heartsLletres{
            font-size: x-small;
            margin-left: 50px
          }
          #hearts-existing { color: #ee8b2d;}
          



                        hr{
                width: 10%;
                color: #fff;
              }

              .form-group{
                margin-bottom: 15px;
              }

              label{
                margin-bottom: 15px;
              }

              input,
              input::-webkit-input-placeholder {
                  font-size: 11px;
                  padding-top: 3px;
              }

              .main-login{
                background-color: #fff;
                  /* shadows and rounded borders */
                  -moz-border-radius: 2px;
                  -webkit-border-radius: 2px;
                  border-radius: 2px;
                  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

              }

              .main-center{
                margin-top: 30px;
                margin: 0 auto;
                max-width: 330px;
                  padding: 40px 40px;

              }

              .login-button{
                margin-top: 5px;
              }

              .login-register{
                font-size: 11px;
                text-align: center;
              }
                   


    </style>

        
</head>

    <body class="background">

    <div class="container">
        <div class="page-header">
            @yield('header')

           
            


              <div class="panel-body">

               <nav class="navbar navbar-inverse">
                 <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="{{url('/')}}">INICI</a>
                  </div>
                    <ul class="nav navbar-nav">
                      
                      <li><a href="{{url('/missatges/add')}}">Missatges</a></li>
                      <li><a href="{{url('/reserves/add')}}">Reserves</a></li>
                      <li><a href="{{url('/afegeix/add')}}">Afegeix una CASA</a></li>
                      <li><a href="{{url('/cases/add')}}">Cases</a></li>
                      <li><a href="{{url('/quisom/add')}}">Qui som?</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{url('/signUp/add')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                      <li><a href="{{url('/login/add')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                  </div>
                </nav>
                 
                
              </div>
            </div>
        </div>
    </div>
    
    <div class="container">
       @yield('content')
    </div>
    <footer class="footer">
        <div class="container">
             @yield('footer')
            <p>&copy; Talaya Software</p>
        </div>
    </footer>
    </body>
</html>
