@extends('admin.layouts.master')

@push('title')
- Book
@endpush
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-body">
            <h4 class="card-title">Form Edit Buku</h4>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="/update-books/{{$book->book_id}}" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail111">Judul Buku</label>
                            <input type="text" name="book_title" class="form-control @error('book_title') is-invalid @enderror" value="{{$book -> book_title}}">
                            @error('book_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Penerbit</label>
                            <select name="book_publisher_id"  class="form-control @error('book_publisher_id') is-invalid @enderror"">
                                <option value="{{$book->publisher->publisher_id}}">{{$book->publisher->publisher_name}}</option>
                                @foreach($publisher as $publisher)
                                @if($book->publisher->publisher_id != $publisher->publisher_id)
                                <option value="{{$publisher->publisher_id}}">{{$publisher->publisher_name}}</option>
                                @endif
                                @endforeach 
                            </select>
                            @error('book_publisher_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Jumlah Halaman</label>
                            <input type="text" name="book_page_total" class="form-control @error('book_page_total') is-invalid @enderror" value="{{$book -> book_page_total}}">
                            @error('book_page_total')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Jumlah Buku</label>
                            <input type="text" name="book_total" class="form-control @error('book_total') is-invalid @enderror" value="{{$book -> book_total}}">
                            @error('book_total')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Kategori</label>
                            <input type="text" name="book_category" class="form-control @error('book_category') is-invalid @enderror" value="{{$book -> book_category}}">
                            @error('book_category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <a href="/books" class="btn btn-dark">Kembali</a>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection