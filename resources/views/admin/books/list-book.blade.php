@extends('admin.layouts.master')

@push('title')
- Book
@endpush

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-2">Data Buku</h4>
        
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">

          </div>

          <div class="col-sm-12 col-md-6">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1049px;">

              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 165.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 243.8px;" aria-label="Position: activate to sort column ascending">Judul Buku</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 118.8px;" aria-label="Office: activate to sort column ascending">Penerbit</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 51.8px;" aria-label="Age: activate to sort column ascending">Jumlah Halaman</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 106.8px;" aria-label="Start date: activate to sort column ascending">Jumlah Buku</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 90.8px;" aria-label="Salary: activate to sort column ascending">Kategori</th>
                  </tr>
              </thead>

              <tbody>
                @foreach($books as $book)
                <tr>
                  <td>{{++$count}}</td>
                  <td>{{$book->book_title}}</td>
                  <td>{{$book->publisher->publisher_name}}</td> 
                  <td>{{$book->book_page_total}}</td> 
                  <td>{{$book->book_total}}</td> 
                  <td>{{$book->book_category}}</td> 
                </tr>
                @endforeach    
              </tbody>
            </table>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card body-->
  </div> <!-- end card -->
</div><!-- end col-->

@endsection