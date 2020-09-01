@extends('admin.layouts.master')

@push('title')
- Book
@endpush
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card card-body">
      <h4 class="card-title">Form Edit Penerbit</h4>
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <form action="/update-publishers/{{$publisher->publisher_id}}" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail111">NAMA PENERBIT</label>
              <input type="text" name="publisher_name" class="form-control" value="{{$publisher -> publisher_name}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail111">ALAMAT PENERBIT</label>
              <input type="text" name="publisher_address" class="form-control" value="{{$publisher -> publisher_address}}">
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
