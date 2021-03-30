@extends('userAdmin.layouts.app')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4"><i class="fas fa-user-cog"></i> Profile</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <h4>My Profile</h4>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <th> Name </th>
                            <td> : </td>
                            <td> {{ Auth::user()->name }} </td>
                          </tr>
                          <tr>
                            <th> Nim </th>
                            <td> : </td>
                            <td> {{ Auth::user()->nim }} </td>
                          </tr>
                          <tr>
                            <th> Class </th>
                            <td> : </td>
                            <td> {{ Auth::user()->kelas }} </td>
                          </tr>
                          <tr>
                            <th> Email </th>
                            <td> : </td>
                            <td> {{ Auth::user()->email }} </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="card-footer">
                    <a href="/user-admin/profile/edit"><div class="btn btn-info"><i class="fas fa-user-edit"></i> Edit Profile</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection