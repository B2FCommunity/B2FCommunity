@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s" id="home">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/assets/img/bg1.png" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">
                                       Welcome to Bala-Bala Family
                                       Community
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="assets/img/about.png" />
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-5 mb-4">
                        About Us
                    </h1>
                    <p class="mb-4">
                        Bala-Bala Family (B2F) adalah sebuah komunitas unik yang beranggotakan para streamer dari berbagai latar belakang, terbentuk secara organik di era Nimo TV dan dipimpin oleh DEANKT (ex VP Evos Esports) dan Nastasia Adeline. Perkumpulan ini awalnya muncul tanpa direncanakan, namun dengan cepat berkembang menjadi sebuah komunitas di dunia streaming Indonesia. Meskipun platform siaran mereka kini telah berpindah ke YouTube, B2F tetap aktif dan konsisten menghadirkan konten-konten menarik bagi para penggemar.
                    </p>
                    <p class="mb-4">
                        Di luar dari pengertian tersebut, B2F adalah sebuah kelompok streamer yang membangun dan menyambung relasi dengan streamer lainnya. Siapa pun streamer yang pernah kolaborasi atau bermain dengan anggota B2F sudah termasuk dalam lingkup relasi B2F. <i>(Walaupun tidak ada di list member di bawah)</i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5" id="team">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <h1 class="display-5 mb-5">Members & Social Media Accounts</h1>
                <p></p>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".b2fog">B2F OG</li>
                        <li class="mx-2" data-filter=".wowclub">WOW Club</li>
                        <li class="mx-2" data-filter=".sokmantep">Sok Mantep Gang</li>
                    </ul>
                </div>
            </div>

            <div class="row g-4 portfolio-container">
                
                @include('member')
                
            </div>
        </div>
    </div>
    @endsection