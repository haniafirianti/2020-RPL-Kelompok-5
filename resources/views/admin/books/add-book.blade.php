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
                                <input type="text" name="book_title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail111">Penerbit</label>
                                <input type="number" name="book_publisher_id" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail111">Jumlah Halaman</label>
                                <input type="number" name="book_page_total" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail111">Jumlah Buku</label>
                                <input type="number" name="book_total" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail111">Kategori</label>
                                <input type="text" name="book_category" class="form-control">
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

