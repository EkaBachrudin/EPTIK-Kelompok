@extends('user.layouts.app')
@section('content')
     <!-- Hero -->
     <section id="slider" class="hero p-0 odd featured">
        <div class="swiper-container no-slider slider-h-75">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide-center">
                    
                    <img src="https://images.unsplash.com/photo-1616004655123-818cbd4b3143?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="full-image" data-mask="70">
                    
                    <div class="slide-content row text-center">
                        <div class="col-12 mx-auto inner">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">About Us</h1>
                            <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section id="content" class="section-1 single bg-light">
        <div class="container">
            <div class="row">

                <!-- Main -->
                <main class="col-12 col-lg-8 p-0">
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <h2 class="featured mt-0 ml-0">Content</h2>
                            <br>
                            Webiste ini di buat untuk mata kuliah Etika Profesi Teknologi Informasi & Komunikasi 
                        </div>
                    </div>        
                </main>

                <!-- Sidebar -->
                <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">                    
                    <div class="row">
                        <div class="col-12 align-self-center text-left">

                            <!-- Widget [services] -->
                            <div class="item widget-services">
                                <h2>Members</h2>
                                <ul class="list-group list-group-flush">
                                    @foreach ($author as $item)
                                    <li class="list-group-item">
                                        <a href="#">
                                            <h5> {{$item->name}} </h5>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

@endsection