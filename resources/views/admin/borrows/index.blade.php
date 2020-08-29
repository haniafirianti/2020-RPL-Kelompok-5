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
                  @foreach($borrow as $borrow)
                  @foreach($borrow->students as $student)
                  @if($student->pivot->borrow_back_date == null)
                  <tr>
                    <td>{{++$count}}</td>
                    <td>{{$borrow->book_title}}</td>
                    <td>{{$student->student_full_name}}</td> 
                    <td>{{$student->pivot->borrow_total_books}}</td>
                    <td>{{$student->pivot->borrow_date}}</td>
                    <td>{{$student->pivot->borrow_expectation_back_date}}</td>
                    <td>
                    @if($borrow_back_date > $student->pivot->borrow_expectation_back_date)
                      {{$borrow_back_date->diffInDays($student->pivot->borrow_expectation_back_date) * $fine}}
                    @else 
                      0
                    @endif  
                    </td>
                    <td>
                      <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModal{{$student->pivot->borrow_id}}">Kembalikan</button>
                    </td>
                  @endif
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModal{{$student->pivot->borrow_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengembalian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/return/{{$student->pivot->borrow_id}}" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail111">Judul Buku</label>
                            <input type="text" class="form-control" name="borrow_book_id" readonly="" value="{{$borrow->book_title}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Nama Peminjam</label>
                            <input type="text" class="form-control" name="borrow_student_id" readonly="" value="{{$student->student_full_name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Total Pinjam</label>
                            <input type="text" class="form-control" name="borrow_total_books" readonly="" value="{{$student->pivot->borrow_total_books}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Tanggal Pinjam</label>
                            <input type="date" class="form-control" name="borrow_back_date" readonly="" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}">
                        </div>

                        <div class="form-group">
                          <label for="">Jumlah Denda</label>
                          @if($borrow_back_date > $student->pivot->borrow_expectation_back_date)
                          <input type="text" class="form-control" name="borrow_total_books" readonly="" value="{{$borrow_back_date->diffInDays($student->pivot->borrow_expectation_back_date) * $fine}}">
                          @else<input type="text" class="form-control" name="borrow_total_books" readonly="" value="0">
                          @endif
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        {{csrf_field()}}
                    </form>
      </div>
    </div>
  </div>
</div>
  
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