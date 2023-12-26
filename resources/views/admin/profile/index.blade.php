@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" action="{{route('admin.profile.update')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
              @csrf
              <div class="card-header">
                <h4>Update profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-12 col-12">
                       <img class="w-25" src="{{asset(auth()->user()->image)}}" alt="profile">
                    </div>
                    <div class="form-group col-md-12 col-12">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                        <div class="invalid-feedback">
                          Please fill in the image
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}" required="">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="{{auth()->user()->email}}" required="">
                      <div class="invalid-feedback">
                        Please fill in the email
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" action="{{route('admin.password.update')}}" class="needs-validation" novalidate="" >
              @csrf
              <div class="card-header">
                <h4>Update password</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-12 col-12">
                      <label>Current password</label>
                      <input type="password" class="form-control" name="current_password"  required="">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="form-group col-md-12 col-12">
                        <label>New password</label>
                        <input type="password" class="form-control" name="password"  required="">
                        <div class="invalid-feedback">
                          Please fill in the name
                        </div>
                      </div>
                      <div class="form-group col-md-12 col-12">
                        <label>Confirm password</label>
                        <input type="password" class="form-control" name="password_confirmation"  required="">
                        <div class="invalid-feedback">
                          Please fill in the name
                        </div>
                      </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
