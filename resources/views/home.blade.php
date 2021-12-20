@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-12">
        <h1 class="text-center aboutus">About Us</h1>
        <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut asperiores nam quam deleniti corporis temporibus deserunt ad id, odit, rerum ea alias tempora nulla dicta reprehenderit est at veniam similique consequatur voluptatum ab maiores? Velit sequi, beatae, animi libero dolorem illum reiciendis totam, iure cumque et quisquam? Impedit dolor ducimus cupiditate assumenda distinctio ratione nobis odit. Obcaecati consectetur nobis veritatis quasi, dicta voluptatem sint? Magnam animi quos iure iste error. Officiis neque itaque explicabo quis repellendus natus facilis incidunt similique, cupiditate delectus sunt inventore, voluptatem laboriosam. Voluptates tenetur dolorum nam sunt excepturi, sequi sed vel, labore beatae voluptatibus repellendus aliquam fuga numquam distinctio cupiditate. Repudiandae odio maxime eveniet tempora? Nobis consequuntur laborum, voluptates adipisci reprehenderit maxime ipsam deleniti. Magnam debitis maiores beatae enim, neque praesentium. Eum libero omnis quod numquam quae aliquam, quas cupiditate sunt pariatur necessitatibus consequatur totam laudantium placeat eligendi ratione a natus vel quaerat delectus ut repudiandae.</p>
    </div>
    <div class="row vismis">
        <div class="col-lg-6 visi">
            <h1 class="text-center">Visi</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, labore minima! Vitae, quos nemo iure necessitatibus vel laborum suscipit sunt! Sed, deleniti? Accusantium, eligendi dolores.</p>
        </div>
        <div class="col-lg-6">
            <h1 class="text-center">Misi</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nihil, quas sit doloremque delectus eligendi earum alias, nesciunt laborum officiis, incidunt minus corrupti maiores quos.</p>
        </div>
    </div>
    
    @include('partials.article')

    @include('partials.facility')

    @include('partials.alumnus')

    @include('partials.work')
@endsection