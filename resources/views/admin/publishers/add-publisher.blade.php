@extends('admin.layouts.master')

@push('title')
- Publisher
@endpush
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-body">
            <h4 class="card-title">Form Tambah Penerbit</h4>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="/publishers" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail111">NAMA PENERBIT</label>
                            <input type="text" name="publisher_name" class="form-control @error('publisher_name') is-invalid @enderror" value="{{ old('publisher_name') }}">
                            @error('publisher_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">ALAMAT PENERBIT</label>
                            <input type="text" name="publisher_address" class="form-control @error('publisher_address') is-invalid @enderror" value="{{ old('publisher_address') }}">
                            @error('publisher_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <a href="/publishers" class="btn btn-dark">Cancel</a>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

