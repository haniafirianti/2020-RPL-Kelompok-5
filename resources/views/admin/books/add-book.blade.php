@extends('admin.layouts.master')

@push('title')
- Book
@endpush
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-body">
            <h4 class="card-title">FORM TAMBAH BUKU</h4>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="/books" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail111">Judul Buku</label>
                            <input type="text" name="book_title" class="form-control @error('book_title') is-invalid @enderror" value="{{ old('book_title') }}">
                                @error('book_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Penerbit</label>
                            <select name="book_publisher_id"  class="form-control @error('book_publisher_id') is-invalid @enderror" value="{{ old('book_publisher_id') }}">
                            @foreach($publisher as $publisher)
                              <option value="{{$publisher->publisher_id}}">{{$publisher->publisher_name}}</option>
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
                            <input type="number" name="book_page_total" class="form-control @error('book_page_total') is-invalid @enderror" value="{{ old('book_page_total') }}">
                                @error('book_page_total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Jumlah Buku</label>
                            <input type="number" name="book_total" class="form-control @error('book_total') is-invalid @enderror" value="{{ old('book_total') }}">
                                @error('book_total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Kategori</label>
                            <input type="text" name="book_category" class="form-control @error('book_category') is-invalid @enderror" value="{{ old('book_category') }}">
                                @error('book_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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


@endsection

