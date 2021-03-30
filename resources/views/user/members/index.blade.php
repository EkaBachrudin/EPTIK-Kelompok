@extends('user.layouts.app')
@section('content')
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="full-image" data-mask="50">
                
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Our Members</h1>
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Members</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Members -->
<section class="section-1 odd offers secondary">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <h2 class="mb-0 super effect-static-text">List of members</h2>
            </div>
        </div>
        <div class="row justify-content-center items">
           @foreach ($user as $item)
           <div class="col-12 col-md-6 col-lg-4 item">
            <a href="/members/{{$item->id}}/detail">
                <div class="card featured text-light">
                    <h4> {{$item->name}} </h4>
                    <p>Nim :  {{$item->nim}} </p>
                    <p>Kelas :  {{$item->kelas}} </p>
                </div>
            </a>
            </div>
           @endforeach
        </div>
    </div>
</section>


@endsection