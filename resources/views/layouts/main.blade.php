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
    <script>
        $(window).scroll(function() {
        if ($(this).scrollTop()>12000){
            $('.myimgDiv').hide(1000);
        }
        else{
        $('.myimgDiv').show(1000);
        }
    });
    </script>
    
    @include('partials.navbar')
    @include('partials.header')
    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="waves-top" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L80,213.3C160,235,320,277,480,293.3C640,309,800,299,960,288C1120,277,1280,267,1360,261.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" class="waves-top" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:rgba(241, 242, 243, 0);display:block;z-index:1;position:relative" width="1366" height="295" preserveAspectRatio="xMidYMid" viewBox="0 0 1366 295">
    <g transform="translate(683,147.5) scale(1,1) translate(-683,-147.5)"><linearGradient id="lg-0.41622563184053296" x1="0" x2="1" y1="0" y2="0">
    <stop stop-color="#073985" offset="0"></stop>
    <stop stop-color="#cf800b" offset="1"></stop>
    </linearGradient><path d="" fill="url(#lg-0.41622563184053296)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="0s" values="M0 0L 0 222.44063986316863Q 136.6 187.0315646762892  273.2 165.96131586955144T 546.4 146.56556872748104T 819.6 94.88283847546626T 1092.8 65.62526953424793T 1366 28.380566023259064L 1366 0 Z;M0 0L 0 211.25811228153503Q 136.6 210.81288091755815  273.2 166.20222084664957T 546.4 143.66500746230003T 819.6 128.4886388975159T 1092.8 81.80141639577582T 1366 32.749969211427185L 1366 0 Z;M0 0L 0 202.07825207853264Q 136.6 207.0205307506377  273.2 189.34327637591642T 546.4 134.34954658602038T 819.6 130.33729830914507T 1092.8 69.45441596650997T 1366 49.10979806737541L 1366 0 Z;M0 0L 0 222.44063986316863Q 136.6 187.0315646762892  273.2 165.96131586955144T 546.4 146.56556872748104T 819.6 94.88283847546626T 1092.8 65.62526953424793T 1366 28.380566023259064L 1366 0 Z"></animate>
    </path><path d="" fill="url(#lg-0.41622563184053296)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-2s" values="M0 0L 0 217.31687100292888Q 136.6 190.05326272485368  273.2 171.0048044317109T 546.4 136.38533952491383T 819.6 101.78878807577499T 1092.8 61.32108004313841T 1366 36.36885245172408L 1366 0 Z;M0 0L 0 217.25408130291785Q 136.6 213.3120852727737  273.2 186.1289930632086T 546.4 168.6468297530928T 819.6 111.59696367121028T 1092.8 93.11718557565437T 1366 66.65143123076851L 1366 0 Z;M0 0L 0 205.92518151519624Q 136.6 212.52563312540806  273.2 176.1415597576637T 546.4 145.1575343670797T 819.6 119.36169138985375T 1092.8 75.0031322192598T 1366 47.5273029407125L 1366 0 Z;M0 0L 0 217.31687100292888Q 136.6 190.05326272485368  273.2 171.0048044317109T 546.4 136.38533952491383T 819.6 101.78878807577499T 1092.8 61.32108004313841T 1366 36.36885245172408L 1366 0 Z"></animate>
    </path><path d="" fill="url(#lg-0.41622563184053296)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-4s" values="M0 0L 0 214.0996182347189Q 136.6 222.4470040303062  273.2 179.49059706332986T 546.4 151.19436965158803T 819.6 107.97303221359505T 1092.8 77.39325047109739T 1366 30.56157412214509L 1366 0 Z;M0 0L 0 208.05417586866974Q 136.6 195.8166437689227  273.2 175.07514374930412T 546.4 162.59182921140626T 819.6 132.40059545608113T 1092.8 83.05767095170623T 1366 57.250609132415775L 1366 0 Z;M0 0L 0 207.63333986610257Q 136.6 231.78117897080972  273.2 193.5654129655257T 546.4 137.19574283172184T 819.6 108.71971778117646T 1092.8 92.49916944178301T 1366 55.913156399773385L 1366 0 Z;M0 0L 0 214.0996182347189Q 136.6 222.4470040303062  273.2 179.49059706332986T 546.4 151.19436965158803T 819.6 107.97303221359505T 1092.8 77.39325047109739T 1366 30.56157412214509L 1366 0 Z"></animate>
    </path><path d="" fill="url(#lg-0.41622563184053296)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-6s" values="M0 0L 0 215.8373271546371Q 136.6 214.26044689850806  273.2 190.9889451497506T 546.4 139.61573070922321T 819.6 95.98862540900964T 1092.8 69.88811103408386T 1366 45.03259572822819L 1366 0 Z;M0 0L 0 198.88570814278108Q 136.6 217.53627764678635  273.2 173.1020054001425T 546.4 146.90700870993535T 819.6 121.46351369316416T 1092.8 70.17675045064979T 1366 38.99741454611956L 1366 0 Z;M0 0L 0 201.86959536300841Q 136.6 235.87711516178166  273.2 199.55400873701808T 546.4 168.62179391900787T 819.6 122.45839170145943T 1092.8 105.80766583152479T 1366 66.16147411917561L 1366 0 Z;M0 0L 0 215.8373271546371Q 136.6 214.26044689850806  273.2 190.9889451497506T 546.4 139.61573070922321T 819.6 95.98862540900964T 1092.8 69.88811103408386T 1366 45.03259572822819L 1366 0 Z"></animate>
    </path><path d="" fill="url(#lg-0.41622563184053296)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-8s" values="M0 0L 0 218.11558907833185Q 136.6 203.1855294713144  273.2 188.22319873510116T 546.4 171.7007108688323T 819.6 124.47578901739337T 1092.8 86.75941208517227T 1366 83.14581232516815L 1366 0 Z;M0 0L 0 199.36454887498826Q 136.6 199.14829592361684  273.2 177.4422771793681T 546.4 137.97856719515107T 819.6 118.96808955861515T 1092.8 91.49198162481595T 1366 72.01195303067513L 1366 0 Z;M0 0L 0 219.87901093107814Q 136.6 226.17180730288212  273.2 192.8967153619732T 546.4 149.7955759748418T 819.6 130.67215072374165T 1092.8 98.84891737968255T 1366 72.06780968767006L 1366 0 Z;M0 0L 0 218.11558907833185Q 136.6 203.1855294713144  273.2 188.22319873510116T 546.4 171.7007108688323T 819.6 124.47578901739337T 1092.8 86.75941208517227T 1366 83.14581232516815L 1366 0 Z"></animate>
    </path></g>
</svg> --}}
    <div class="container">
        @yield('container')
    </div>

</div>

    @include('partials.footer')

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script>  --}}

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
        <script src="js/jquery.min.js"></script>
</body>
</html>