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
    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

    <title>HMIF | {{ $title }}</title>
</head>
<body>
    
    @include('partials.navbar')

    @include('partials.header')
    <svg xmlns="http://www.w3.org/2000/svg" class="waves-top" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L80,213.3C160,235,320,277,480,293.3C640,309,800,299,960,288C1120,277,1280,267,1360,261.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    <div class="container">
        @yield('container')
    </div>

</div>

    @include('partials.footer')

    {{-- Scroll navbar change script --}}
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                    $(".navbar-dark").css("background-color", "rgba(244, 245, 246, 1)");
                    // document.querySelectorAll('.nav-link').add('.coloring-nav');
                    var x = document.querySelectorAll('.nav-link');
                    for (var i = 0; i < x.length; i++) {
                        x[i].style.color = "#232323";
                    }
                    var navBrand = document.querySelector('.navbar-brand');
                    navBrand.style.color = "#232323";

                    $(".nav-link").hover(function() {
                        $(this).css("color", "gray");
                    }, function() {
                        $(this).css("color", "#232323");
                    })
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    document.body.style.paddingTop = '0';
                    $(".navbar-dark").css("background-color", "");
                    var x = document.querySelectorAll('.nav-link');
                    for (var i = 0; i < x.length; i++) {
                        x[i].style.color = "white";
                    }
                    var navBrand = document.querySelector('.navbar-brand');
                    navBrand.style.color = "white";

                    $(".nav-link").hover(function() {
                        $(this).css("color", "gray");
                    }, function() {
                        $(this).css("color", "white");
                    })
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