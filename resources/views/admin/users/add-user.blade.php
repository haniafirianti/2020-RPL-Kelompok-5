@extends('admin.layouts.master')

@push('title')
- Book
@endpush
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card card-body">
			<h4 class="card-title">Form Tambah User</h4>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<form action="/users" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail111">EMAIL</label>
							<input type="text" name="user_email" class="form-control @error('user_email') is-invalid @enderror" value="{{ old('user_email') }}">
							@error('user_email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">PASSWORD</label>
							<input type="text" name="user_password" class="form-control @error('user_password') is-invalid @enderror" value="{{ old('user_password') }}">
							@error('user_password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">NOMOR INDUK SISWA</label>
							<input type="text" name="user_nis" class="form-control @error('user_nis') is-invalid @enderror" value="{{ old('user_nis') }}">
							@error('user_nis')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">NAMA LENGKAP</label>
							<input type="text" name="user_full_name" class="form-control @error('user_full_name') is-invalid @enderror" value="{{ old('user_full_name') }}">
							@error('user_full_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">KELAS</label>
							<input type="text" name="user_class" class="form-control @error('user_class') is-invalid @enderror" value="{{ old('user_class') }}">
							@error('user_class')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">NO HP</label>
							<input type="text" name="user_phone_number" class="form-control @error('user_phone_number') is-invalid @enderror" value="{{ old('user_phone_number') }}">
							@error('user_phone_number')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">ALAMAT</label>
							<input type="text" name="user_address" class="form-control @error('user_address') is-invalid @enderror" value="{{ old('user_address') }}">
							@error('user_address')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div>
							<input type="hidden" name="user_level" value="1">
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

