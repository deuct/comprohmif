<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- My Style --}}
    <link rel="stylesheet" href="css/style.css">

    <title>HMIF | {{ $title }}</title>
</head>
<body>
    
    @include('partials.navbar')

    @include('partials.header')

    <div class="container">
        @yield('container')
    </div>

    {{-- Myscript --}}
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                    $(".navbar-light").css("background-color", "white");
                    // $(".navbar-light .navbar-nav .nav-link").css("color", "black"));
                    document.querySelectorAll('.nav-link').add('.coloring-nav');
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    document.body.style.paddingTop = '0';
                    $(".navbar-light").css("background-color", "");
                }
            });
        });
    </script>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>