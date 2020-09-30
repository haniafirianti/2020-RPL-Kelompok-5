@extends('admin.layouts.master')

@push('title')
- Student
@endpush
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card card-body">
			<h4 class="card-title">Form Tambah student</h4>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<form action="/students" method="POST">

						<div class="form-group">
							<label for="exampleInputEmail111">NOMOR INDUK SISWA</label>
							<input type="text" name="student_nis" class="form-control @error('student_nis') is-invalid @enderror" value="{{ old('student_nis') }}">
							@error('student_nis')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">NAMA LENGKAP</label>
							<input type="text" name="student_full_name" class="form-control @error('student_full_name') is-invalid @enderror" value="{{ old('student_full_name') }}">
							@error('student_full_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">KELAS</label>
							<select name="student_class" class="form-control @error('student_class') is-invalid @enderror" value="{{ old('student_class') }}">
								<option>X RPL</option>
								<option>X MM</option>
								<option>XI RPL</option>
								<option>XI MM</option>
								<option>XII RPL</option>
								<option>XII MMM</option>
							</select>
							@error('student_class')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">NO HP</label>
							<input type="text" name="student_phone_number" class="form-control @error('student_phone_number') is-invalid @enderror" value="{{ old('student_phone_number') }}">
							@error('student_phone_number')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">ALAMAT</label>
							<input type="text" name="student_address" class="form-control @error('student_address') is-invalid @enderror" value="{{ old('student_address') }}">
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

