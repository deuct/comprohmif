@extends('layouts.main')

@section('container')
    <div class="row">
        <div class=" aboutus col-lg-12 col-md-12">
        <h1 class="text-center aboutus-title">About Us</h1>
        <p class="mt-3 justify-content-center">HMIF Adalah organisasi mahasiswa informatika Institut Teknologi Indonesia. HMIF memiliki workshop yang bertempat di dalam kampus Institut Teknologi Indonesia yang beralamat di Jl. Puspitek, Setu, Kec. Serpong, Kota Tangerang Selatan, Banten 15314. Organisasi mahasiswa ini bertujuan untuk membentuk softskill maupun hardskill dari mahasiswa Informatika ITI. Segi softskill yang di asah antara lain yaitu keorganisasian,proposal, birokrasi, dsb. Segi hardskill yang di asah antara lain yaitu pengadaan pelatihan tentang UI/UX, Database, Web design, dsb.
        </p>
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

    {{-- @include('partials.alumnus') --}}

    @include('partials.work')
@endsection