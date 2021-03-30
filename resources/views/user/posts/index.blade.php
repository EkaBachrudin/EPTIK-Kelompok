
@extends('user.layouts.app')
@section('content')
    <!-- Hero -->
    <!-- Hero -->
    <section id="slider" class="hero p-0 odd featured">
        <div class="swiper-container no-slider slider-h-75">
            <div class="swiper-wrapper">

                <!-- Item 1 -->
                <div class="swiper-slide slide-center">
                    
                    <img src="https://images.unsplash.com/photo-1497864149936-d3163f0c0f4b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" class="full-image" data-mask="70">
                    
                    <div class="slide-content row text-center">
                        <div class="col-12 mx-auto inner">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"> All Blog Posts</h1>
                            <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="section-1 section-vs-30 section-vsr-30 body-mode-dark showcase blog-grid masonry news">
        <div data-aos="zoom-in" data-aos-delay="800" data-aos-anchor="body" class="container full-grid">
            <div class="row">
                <div class="col-lg-12 p-3 text-center text-lg-left item">
                    @isset ($user)
                        <h2 class="title text-center">All {{$user->name}}'s Posts </h2>
                    @endisset
                    <h4 class="title">Specific author</h4>
                    @foreach ($author as $item)
                        <a href="/all-posts/{{$item->id}}/specific" class="badge tag"> {{$item->name}} </a>
                    @endforeach
                </div>
            </div>
            <div class="row content blog-grid masonry">
                <main class="col-12 p-0 mt-5">
                    <div class="bricklayer items columns-3">
                        @foreach ($post as $item)
                        <div class="card p-0 text-center item">
                            <div class="image-over">
                                <img src="https://source.unsplash.com/collection/{{$item->id}}/640x426" alt="{{$item->user->name}}">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="/show-post/{{$item->slug}}">
                                        <h4>{{$item->title}}</h4>
                                    </a>
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-between">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>{{ Str::limit($item->user->name, 10) }} </a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>{{$item->created_at->diffForhumans()}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
    </section>
@endsection