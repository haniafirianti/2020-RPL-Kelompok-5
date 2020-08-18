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
                            <input type="text" name="book_title" class="form-control" value="{{$book -> book_title}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Penerbit</label>
                            <select name="book_publisher_id"  class="form-control">
                                <option value="{{$book->publisher->publisher_id}}">{{$book->publisher->publisher_name}}</option>
                                @foreach($publisher as $publisher)
                                @if($book->publisher->publisher_id != $publisher->publisher_id)
                                <option value="{{$publisher->publisher_id}}">{{$publisher->publisher_name}}</option>
                                @endif
                                @endforeach 
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Jumlah Halaman</label>
                            <input type="text" name="book_page_total" class="form-control" value="{{$book -> book_page_total}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Jumlah Buku</label>
                            <input type="text" name="book_total" class="form-control" value="{{$book -> book_total}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Kategori</label>
                            <input type="text" name="book_category" class="form-control" value="{{$book -> book_category}}">
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
</div>

@endsection