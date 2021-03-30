@extends('superAdmin.layouts.app')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4"> Author/{{$user->name}}/Edit </h2>
        </div>
    </div>
    <hr>
    <div class="row">
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
           <div class="card shadow">
               <div class="card-body">
                   <form action="/super-woofer-admin/author/{{$user->id}}/update" method="POST">
                    @csrf
                       @method('patch')
                       <div class="form-group">
                           <label>Name</label>
                           <input type="text" name="name" class="form-control" value="{{$user->name}}">
                       </div>
                        <div class="form-group">
                            <label>Nim</label>
                            <input type="text" name="nim" class="form-control" value="{{$user->nim}}">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="{{$user->kelas}}">
                        </div>
                        <div class="form-group">
                            <label>Emal</label>
                            <input type="text" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                        <input type="submit" value="Update" class="btn btn-danger">
                   </form>
               </div>
               <div class="card-footer">
                   <form action="/super-woofer-admin/author/{{$user->id}}/updatePass" method="POST">
                       @method('patch')
                       @csrf
                       <div class="form-group">
                           <label>Edit Pasword</label>
                           <input type="password" name="password" class="form-control">
                       </div>
                       <input type="submit" value="Update Password" class="btn btn-success">
                   </form>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection