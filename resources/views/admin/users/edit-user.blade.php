@extends('admin.layouts.master')

@push('title')
- Book
@endpush
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card card-body">
      <h4 class="card-title">Form Edit User</h4>
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <form action="/update-users/{{$user->user_id}}" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail111">EMAIL</label>
              <input type="text" name="user_email" value="{{$user -> user_email}}" class="form-control @error('user_email') is-invalid @enderror" value="{{ old('user_email') }}">
              @error('user_email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">PASSWORD</label>
              <input type="text" name="user_password" value="{{$user -> user_password}}" class="form-control @error('user_password') is-invalid @enderror" value="{{ old('user_email') }}">
              @error('user_password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">NAMA LENGKAP</label>
              <input type="text" name="user_full_name" value="{{$user ->user_full_name}}" class="form-control @error('user_full_name') is-invalid @enderror" value="{{ old('user_email') }}">
              @error('user_full_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <a href="/users" class="btn btn-dark">Cancel</a>
            {{csrf_field()}}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection


