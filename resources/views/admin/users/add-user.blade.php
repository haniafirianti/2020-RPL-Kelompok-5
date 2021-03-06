@extends('admin.layouts.master')

@push('title')
- User
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
							<label for="exampleInputEmail111">NAMA LENGKAP</label>
							<input type="text" name="user_full_name" class="form-control @error('user_full_name') is-invalid @enderror" value="{{ old('user_full_name') }}">
							@error('user_full_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="user_password">PASSWORD</label>
							<input id="user_password" type="password" name="user_password" class="form-control @error('user_password') is-invalid @enderror" value="{{ old('user_password') }}" required autocomplete="new-password">
							@error('user_password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="password-confirm">CONFIRM PASSWORD</label>
							<input  id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
							
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

