@extends('superAdmin.layouts.app')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4"> All members posts </h2>
        </div>
    </div>
    <hr>
    <div class="row">
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
           <div class="card shadow">
               <div class="card-body">
                <table class="table table-striped" id="dataTable">
                    <thead>
                      <tr>
                        <th scope="col">No <?php $no=1  ?> </th>
                        <th scope="col">Title</th>
                        <th> Author </th>
                        <th scope="col">Created date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($post as $item)
                        <tr>
                            <th scope="row"> {{$no++}} </th>
                            <td> {{$item->title}} </td>
                            <td> {{$item->user->name}} </td>
                            <td> {{$item->created_at->format('d-M-Y')}} </td>
                            <td>  <a href="/user-admin/post/{{$item->id}}/delete" onclick="return confirm('Are you sure you want to delete this post.......?');"><div class="btn btn-danger"><i class="fas fa-trash"></i></div></a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection