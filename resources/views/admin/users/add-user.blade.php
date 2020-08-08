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
							<input type="text" name="email" class="form-control">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">PASSWORD</label>
							<input type="text" name="password" class="form-control">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">NOMOR INDUK SISWA</label>
							<input type="text" name="user_nis" class="form-control">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">NAMA LENGKAP</label>
							<input type="text" name="user_full_name" class="form-control">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">KELAS</label>
							<input type="text" name="user_class" class="form-control">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">NO HP</label>
							<input type="text" name="user_phone_number" class="form-control">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail111">ALAMAT</label>
							<input type="text" name="user_address" class="form-control">
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

