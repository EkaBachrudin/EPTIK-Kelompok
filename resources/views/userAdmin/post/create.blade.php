@extends('userAdmin.layouts.app')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4"><i class="fas fa-paste"></i> Create new post</h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    <form action="/user-admin/post/store" method="POST" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label> TItle </label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="body" required></textarea>
                        </div>
                        <input type="submit" value="Store" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection