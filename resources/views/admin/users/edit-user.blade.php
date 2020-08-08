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
              <input type="text" name="user_email" class="form-control" value="{{$user -> user_email}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">PASSWORD</label>
              <input type="text" name="user_password" class="form-control" value="{{$user -> user_password}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">NOMOR INDUK SISWA</label>
              <input type="text" name="user_nis" class="form-control" value="{{$user -> user_nis}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">NAMA LENGKAP</label>
              <input type="text" name="user_full_name" class="form-control" value="{{$user ->user_full_name}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">KELAS</label>
              <input type="text" name="user_class" class="form-control" value="{{$user->user_class}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">NO.HP</label>
              <input type="text" name="user_phone_number" class="form-control" value="{{$user -> user_phone_number}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">ALAMAT</label>
              <input type="text" name="user_address" class="form-control" value="{{$user -> user_address}}">
            </div>

            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button type="back" class="btn btn-dark">Cancel</button>
            {{csrf_field()}}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection


