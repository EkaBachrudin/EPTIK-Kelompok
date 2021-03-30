@extends('user.layouts.app')
@section('content')
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-100">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                
                <img src="https://source.unsplash.com/random" class="full-image" data-mask="80">
                
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"> {{$post->title}} </h1>
                        <h4 data-aos="zoom-out-up" data-aos-delay="400" class="effect-static-text"><i class="icon-user"></i> {{$post->user->name}}</h4>
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('post.index')}}">All Posts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show Post</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content -->
<section id="content" class="section-1 body-mode-dark single featured">
    <div class="container">
        <div class="row">

            <!-- Main -->
            <main class="col-12 p-0">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h2 class="featured mt-0 ml-0"> {{$post->title}} </h2>
                        <br>
                        <div style="color:white">{!! $post->body !!}</div>

                        <!-- Post Holder -->
                        <ul class="mb-5 post-holder">
                            <li class="post-meta-item">
                                <time class="date"><span class="posted-on">Posted on <a href="#" rel="bookmark"><time class="entry-date published updated"> {{$post->created_at->format('d M Y')}} </time></a></span></time>
                            </li>
                        </ul>
                    </div>
                </div>        
            </main>
        </div>
    </div>
</section>
@endsection