@extends('admin.layouts.master')
@section('js')
<!-- Untuk tambah peminjaman -->
<script type="text/javascript">
$(".js-example-placeholder-single").select2({
    placeholder: "Select a state",
    allowClear: true
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
                            <select class="js-example-placeholder-single js-states form-control @error('borrow_student_id') is-invalid @enderror" name="borrow_student_id" value="{{old('borrow_student_id')}}" required>
                                @foreach($students as $student)
                                 <option value="{{$student->student_id}}"> {{$student->student_full_name}} </option>
                                @endforeach 
                            </select>
                            </div>
                            @error('borrow_student_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="book_id">Buku</label>
                            <div class="input-group">
                            <select class="js-example-placeholder-single js-states form-control @error('borrow_book_id') is-invalid @enderror" name="borrow_book_id" value="{{old('borrow_book_id')}}" required>
                                @foreach($books as $book)
                                @if($book->publisher)
                                 <option value="{{$book->book_id}}"> {{$book->book_title}} </option>   
                                @endif
                                @endforeach 
                            </select>
                            </div>
                            @error('borrow_book_id')
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
                            <input type="date" class="form-control @error('borrow_date') is-invalid @enderror" name="borrow_date" readonly="" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" required>
                            @error('borrow_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail111">Tanggal Kembali</label>
                            <input type="date" class="form-control @error('borrow_expectation_back_date') is-invalid @enderror" name="borrow_expectation_back_date" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(7)->toDateString())) }}" required>
                            @error('borrow_expectation_back_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <a href="/borrows" class="btn btn-dark">Cancel</a>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

