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
              <input type="text" name="student_nis" value="{{$student -> student_nis}}" class="form-control @error('student_nis') is-invalid @enderror">
              @error('student_nis')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">NAMA LENGKAP</label>
              <input type="text" name="student_full_name" value="{{$student ->student_full_name}}" class="form-control @error('student_full_name') is-invalid @enderror">
              @error('student_full_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">KELAS</label>
              <input type="text" name="student_class" value="{{$student->student_class}}" class="form-control @error('student_class') is-invalid @enderror">
              @error('student_class')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">NO.HP</label>
              <input type="text" name="student_phone_number" value="{{$student -> student_phone_number}}" class="form-control @error('student_phone_number') is-invalid @enderror">
              @error('student_phone_number')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">ALAMAT</label>
              <input type="text" name="student_address" value="{{$student -> student_address}}" class="form-control @error('student_address') is-invalid @enderror">
              @error('student_address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <a href="/students" class="btn btn-dark">Cancel</a>
            {{csrf_field()}}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection


