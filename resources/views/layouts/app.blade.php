<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
                 .dd2{
                  display:none;
                 }
                 .dd1{
                  display:none;
                 }
                 .dd3{
                  display:none;
                 }
                 </style>
                 
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fontawesome.com/v4.7.0/examples/" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
               
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                
                </div>
            @endif
            <a href="{{ route('certificates.create') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            <a href="{{ route('certificates.index') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Certifications</a>
</div>
</div>

@yield('content')
<script>
                
                var x = document.getElementById("awarding").value;
                
                
                if(x == 1){
                  document.getElementById("fees").classList.remove("dd2");
                   document.getElementById("dd1").classList.remove("dd1");
                   document.getElementById("dd3").classList.remove("dd3");
                   }else{
                   document.getElementById("fees").classList.add("dd2");
                   document.getElementById("dd1").classList.add("dd1");
                   document.getElementById("dd3").classList.add("dd3");
                   }
                
                
function enable(select){
                   console.log(select.value);
                   
                   if(select.value == 1){
                   document.getElementById("fees").classList.remove("dd2");
                   document.getElementById("dd1").classList.remove("dd1");
                   document.getElementById("dd3").classList.remove("dd3");
                   }else{
                   document.getElementById("fees").classList.add("dd2");
                   document.getElementById("dd1").classList.add("dd1");
                   document.getElementById("dd3").classList.add("dd3");
                   }
                     };
                  

                  $(document).ready(function() {
                  $('.js-example-basic-single').select2({
      
      placeholder:'select awarding',
                  tokenSeparators: [',', ' ']
                
                 });
                 });

                  </script>
                  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>
