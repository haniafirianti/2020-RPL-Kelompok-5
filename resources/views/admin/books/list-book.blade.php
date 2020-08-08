@extends('admin.layouts.master')

@push('title')
- Book
@endpush

@section('content')
<div class="row">
  @foreach($books as $book)      
  <div class="col-xl-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <img class="card-img-top img-fluid" src="{{asset('template/img/gallery-img/5.jpg')}}" alt="Card image cap">
        <h5 class="font-20 mt-15 mb-1">{{$book->book_title}}</h5>
        <div class="card-btns d-flex justify-content-between mt-30">
          <a href="#" class="btn btn-outline-info">Pinjam Buku</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection