@extends('user.layouts.app')
@section('content')
    <!-- Members Detail -->
    <section class="section-1 odd offers secondary">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 mt-5">
                    <h2 class="mb-0 super effect-static-text">All {{$user->name}}'s Posts</h2>
                </div>
            </div>
            <div class="row justify-content-left items ml-3">
                @foreach ($user->posts as $item)
                  <div class="col-md-4">
                    <a href="/show-post/{{$item->slug}}">
                        <div class="card">
                            <div class="card-body">
                             <h5>{{$item->title}}</h5>
                            </div>
                            <div class="card-footer">
                             <p>Posted on {{$item->created_at->format('d M Y')}} </p>
                            </div>
                        </div>
                      </a>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection