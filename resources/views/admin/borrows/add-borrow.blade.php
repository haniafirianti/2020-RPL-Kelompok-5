@extends('admin.layouts.master')
@section('js')
 <!-- Untuk tambah peminjaman -->
  <script type="text/javascript">
   $(document).on('click', '.pilih_buku', function (e) {
                document.getElementById("book_title").value = $(this).attr('data-buku_judul');
                document.getElementById("book_id").value = $(this).attr('data-buku_id');
                $('#myModal').modal('hide');
            });

            $(document).on('click', '.pilih_siswa', function (e) {
                document.getElementById("student_id").value = $(this).attr('data-anggota_id');
                document.getElementById("student_full_name").value = $(this).attr('data-anggota_nama');
                $('#myModal2').modal('hide');
            });
          
             $(function () {
                $("#lookup, #lookup2").dataTable();
            });

        </script>
@stop

@push('title')
- Borrow
@endpush
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-body">
            <h4 class="card-title">FORM TAMBAH PEMINJAMAN</h4>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="/borrows" method="POST">
                        <div class="form-group">
                            <label for="student_id">Siswa</label>
                            <div class="input-group">
                            <input id="student_full_name" type="text" name="student_full_name" value="{{ old('student_full_name') }}" required readonly="" class="form-control @error('student_full_name') is-invalid @enderror">
                            <input id="student_id" type="hidden" name="borrow_student_id">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModal2"><b>Cari Siswa</b> <span class="fa fa-search"></span></button>
                            </span>
                            </div>
                            @error('student_full_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="book_id">Buku</label>
                            <div class="input-group">
                            <input id="book_title" type="text" name="book_title"  value="{{ old('book_title') }}" required readonly class="form-control @error('book_title') is-invalid @enderror">
                            <input id="book_id" type="hidden" name="borrow_book_id">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModal"><b>Cari Buku</b> <span class="fa fa-search"></span></button>
                            </span>
                            </div>
                            @error('book_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Jumlah Buku</label>
                            <input type="number" name="borrow_total_books" class="form-control @error('borrow_total_books') is-invalid @enderror" value="{{ old('borrow_total_books') }}">
                            @error('borrow_total_books')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            @if (session('status'))
                                 <div class="alert alert-danger">
                                    {{ session('status') }}
                                 </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Tanggal Pinjam</label>
                            <input type="date" class="form-control @error('borrow_date') is-invalid @enderror" name="borrow_date" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" required>
                            @error('borrow_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Tanggal Kembali</label>
                            <input type="date" class="form-control @error('borrow_expectation_back_date') is-invalid @enderror"name="borrow_expectation_back_date" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(7)->toDateString())) }}" required>
                            @error('borrow_expectation_back_date')
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


  <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <table id="lookup" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1049px;">

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
                  @foreach($books as $count=> $book)
                  <tr class="pilih_buku" data-buku_id="{{$book->book_id}}" data-buku_judul="{{$book->book_title}}">
                    <td>{{$count+1}}</td>
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
            </div>
        </div>


  <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <table id="lookup2" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1049px;">

                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 165.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 118.8px;" aria-label="Office: activate to sort column ascending">NIS</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 51.8px;" aria-label="Age: activate to sort column ascending">NAMA LENGKAP</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 106.8px;" aria-label="Start date: activate to sort column ascending">KELAS</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 90.8px;" aria-label="Salary: activate to sort column ascending">NO.HP</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 90.8px;" aria-label="Salary: activate to sort column ascending">ALAMAT</th>
                  </tr>
                </thead>

                <tbody>
                @foreach($students as $count=> $student)
                  <tr class="pilih_siswa" data-anggota_id="{{$student->student_id}}" data-anggota_nama="{{$student->student_full_name}}">
                    <td>{{$count+1}}</td>
                    <td>{{$student->student_nis}}</td>
                    <td>{{$student->student_full_name}}</td>
                    <td>{{$student->student_class}}</td>
                    <td>{{$student->student_phone_number}}</td>
                    <td>{{$student->student_address}}</td>
                    @endforeach    
                  </tbody>
            </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

