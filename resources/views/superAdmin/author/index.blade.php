@extends('superAdmin.layouts.app')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4"> All User Control </h2>
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
                        <th> Name </th>
                        <th> Nim </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($author as $item)
                        <tr>
                            <th scope="row"> {{$no++}} </th>
                            <td> {{$item->name}} </td>
                            <td> {{$item->nim}} </td>
                            <td> <a href="/super-woofer-admin/author/{{$item->id}}"><div class="btn btn-info btn-sm"> EDIT </div> </a> </td>
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