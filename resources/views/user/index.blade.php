@extends('user.layouts.app')
@section('content')
     <!-- Hero -->
     <section id="slider" class="hero odd p-0 featured">
        <div class="swiper-container no-slider animation slider-h-100">
            <div class="swiper-wrapper">

                <!-- Item 1 -->
                <div class="swiper-slide slide-center">

                    <!-- Particles -->
                    <div id="particles-1" class="particles full-image" data-particle="space" data-mask="70"></div>    

                    <div class="slide-content row">
                        <div class="col-12 d-flex inner">
                            <div class="center align-self-center text-center mt-5">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">WEBSITE TUGAS MATA KULIAH EPTIK</h1>
                                <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto mr-auto"> SEMESTER VI </p>
                                <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto mr-auto">Coming together is a beginning. Keeping together is progress. Working together is success.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Team -->
    <section id="team" class="section-5 odd carousel">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Group Members</h2>
                        <p class="text-max-800">The strength of the team is each individual member. The strength of each member is the team.</p>
                    </div>
                </div>
                <div class="swiper-container mid-slider-simple items">
                    <div class="swiper-wrapper">
                       @foreach ($user as $item)
                       <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <h4> {{$item->name}} </h4>
                                <p>{{$item->nim}}</p>
                            </div>
                        </div>
                    </div>
                       @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
@endsection