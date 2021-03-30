@extends('userAdmin.layouts.app')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-8">
            <h2 class="mb-4"><i class="far fa-eye"></i> Show Post </h2>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow p-5">
                <div class="card-header">
                    <h2> {{$post->title}} </h2>
                    <p> <i class="fas fa-user"></i> Autor {{$post->user->name}} </p>
                    <p> <i class="fas fa-history"></i> {{$post->created_at->diffForHumans()}} </p>
                </div>
                <div class="card-body">
                    {!! $post->body !!}
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection