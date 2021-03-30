@extends('userAdmin.layouts.app')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4"><i class="fas fa-user-cog"></i> Edit Profile</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header">
                    Edit my profile
                </div>
                <div class="card-body">
                    <form action="/user-admin/profile/{{Auth::user()->id}}/update" method="post" autocomplete="off">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="name"> Name </label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nim"> Nim </label>
                            <input type="text" name="nim" id="nim" class="form-control" value="{{ Auth::user()->nim }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kelas"> Class </label>
                            <input type="text" name="kelas" id="kelas" class="form-control" value="{{ Auth::user()->kelas }}" required>
                        </div>
                        <input type="submit" value="Update" class="btn btn-primary">
                    </form>
                </div>
                <div class="card-footer">
                    <div class="btn btn-info" data-toggle="modal" data-target="#passChange"> <i class="fas fa-lock"></i> Change Password </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal change password -->
  <div class="modal fade" id="passChange" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-lock"></i> Change password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="/user-admin/profile/{{Auth::user()->id}}/update-password" method="POST" autocomplete="off">
            @csrf
            @method('patch')
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Save">
         </form>
        </div>
      </div>
    </div>
  </div>
@endsection