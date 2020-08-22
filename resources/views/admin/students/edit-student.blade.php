@extends('admin.layouts.master')

@push('title')
- Student
@endpush
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card card-body">
      <h4 class="card-title">Form Edit student</h4>
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <form action="/update-students/{{$student->student_id}}" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail111">NOMOR INDUK SISWA</label>
              <input type="text" name="student_nis" class="form-control" value="{{$student -> student_nis}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">NAMA LENGKAP</label>
              <input type="text" name="student_full_name" class="form-control" value="{{$student ->student_full_name}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">KELAS</label>
              <input type="text" name="student_class" class="form-control" value="{{$student->student_class}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">NO.HP</label>
              <input type="text" name="student_phone_number" class="form-control" value="{{$student -> student_phone_number}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">ALAMAT</label>
              <input type="text" name="student_address" class="form-control" value="{{$student -> student_address}}">
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


