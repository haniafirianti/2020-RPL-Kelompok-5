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
                                <input type="text" name="book_publisher_id" class="form-control" value="{{$book -> book_publisher_id}}">
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