<!DOCTYPE html>
<html lang ="{{ app()->getLocale()}}" >
    <head>
        <meta charset ="utf-8">
        <meta http-equiv ="Xf-UA-Compatible"content ="IE=edge">
        <meta name ="viewport" content ="width=device-width=device-width,initial-scale=1" >
        
        <!--CSRF Token-->
        <meta name ="csrf-token" content ="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <!--Scripts-->
        <script src ="{{ secure_asset('js')}}" defer> </script>
        
        <!--Fonts-->
        <link rel ="dns-prefetch" href = "https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        
        <!--Styles-->
        <link href ="{{secure_asset('css/app.css')}}" rel="stylesheet">
        <link href ="{{secure_asset('css/admin.css')}}" rel="stylesheet">
    </head>
        
    <body>
        <div id ="app">
        <!--画面上部に表示するナビゲーションバー-->
            <nav class ="navbar-expand-md navar-dark nabar-laravel">
               <div class ="container">
                  <a class ="navbar-brand" href="{{ url('/')}}">
                      {{ config('app.name','Laravel')}}
                  </a>
                 
                  <button class ="navbar-toggler" type ="button" data-toggle ="collapse" data-target ="#navbarSupportedContent" aria-controls ="navbarSupportedContent" aria-expanded ="false" aria-label ="Togglenavigation"> 
                      <span class ="navbar-toggler-icon"></span>
                  </button>
                 
                  <div class="collapse navbar-collapse" id="nabarSupportedContent">
                      <!--Left Side Of Navbar-->
                      <ul class ="navbar-nav ms-auto">
                     
                      </ul>
                     
                      <!--Right Side Of Navbar-->
                      <ul class="navbar-nav">
                      
                      </ul>
                      
                  </div>
               </div>
            </nav>
            <!--ここまでナビゲーションバー-->
          <main class ="py-4">
              {{--コンテンツをここに入れる為、@yieldで空けておく--}}
              @yield('content')
          </main>
        </div>  
    </body>
        
</html>
