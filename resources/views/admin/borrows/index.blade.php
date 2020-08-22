@extends('admin.layouts.master')

@push('title')
- Borrow
@endpush

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-2">Data Peminjaman Buku</h4>
        
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dt-buttons btn-group"> 
                <div class="dt-buttons btn-group"> 
                  <a href="/add-borrow" class="btn btn-outline-success btn-lg fa fa-plus"></a>
                </div>
                <button class="btn btn-outline-warning btn-lg buttons-print fa fa-print" tabindex="0" aria-controls="datatable-buttons" type="button">
                </button> 
              </div>
            </div>

            <div class="col-sm-12 col-md-6">

            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1049px;">

                <thead>
                  <tr role="row">
                    <th class="sorting_asc" aria-controls="datatable-buttons" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
                    <th class="sorting" aria-controls="datatable-buttons" aria-label="Position: activate to sort column ascending">Nama Buku</th>
                    <th class="sorting" aria-controls="datatable-buttons" aria-label="Office: activate to sort column ascending">Nama Peminjam</th>
                    <th class="sorting" aria-controls="datatable-buttons" aria-label="Office: activate to sort column ascending">Jumlah Buku</th>
                    <th class="sorting" aria-controls="datatable-buttons" aria-label="Office: activate to sort column ascending">Tanggal Pinjam</th>
                    <th class="sorting" aria-controls="datatable-buttons" aria-label="Office: activate to sort column ascending">Tanggal Kembali</th>
                    <th class="sorting" aria-controls="datatable-buttons" aria-label="Office: activate to sort column ascending">Denda</th>
                    <th class="sorting" aria-controls="datatable-buttons" aria-label="Office: activate to sort column ascending">ACTION</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($borrow as $count=> $borrow)
                  @foreach($borrow->students as $student)
                  <tr>
                    <td>{{$count+1}}</td>
                    <td>{{$borrow->book_title}}</td>
                    <td>{{$student->student_full_name}}</td> 
                    <td>{{$student->pivot->borrow_total_books}}</td>
                    <td>{{$student->pivot->borrow_date}}</td>
                    <td>{{$student->pivot->borrow_expectation_back_date}}</td>
                    <td>{{$student->pivot->borrow_fine}}</td>
                    <td>
                      <a href="#" class="btn btn-info btn-sm">Kembalikan</a>
                      <a href="#" class="btn btn-danger btn-sm">Bayar Denda</a>
                    </td>
                    @endforeach  
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
  </div>
  @endsection