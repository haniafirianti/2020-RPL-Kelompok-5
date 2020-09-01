@extends('admin.layouts.master')

@push('title')
- student
@endpush

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-2">Data Siswa</h4>
        
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dt-buttons btn-group"> 
                <a href="/add-students" class="btn btn-outline-success btn-lg fa fa-plus"></a>
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
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 165.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 118.8px;" aria-label="Office: activate to sort column ascending">NIS</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 51.8px;" aria-label="Age: activate to sort column ascending">NAMA LENGKAP</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 106.8px;" aria-label="Start date: activate to sort column ascending">KELAS</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 90.8px;" aria-label="Salary: activate to sort column ascending">NO.HP</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 90.8px;" aria-label="Salary: activate to sort column ascending">ALAMAT</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 90.8px;" aria-label="Salary: activate to sort column ascending">Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($student as $count=> $student)
                  <tr>
                    <td>{{$count+1}}</td>
                    <td>{{$student->student_nis}}</td>
                    <td>{{$student->student_full_name}}</td>
                    <td>{{$student->student_class}}</td>
                    <td>{{$student->student_phone_number}}</td>
                    <td>{{$student->student_address}}</td>
                    <td>
                      <form action="/students/{{$student->student_id}}" method="post">
                        <a href="edit-students/{{$student->student_id}}/edit" class="btn btn-outline-info fa fa-pencil-square-o" ></a>
                        <button type="submit" name="submit" class="btn btn-outline-danger fa fa-trash-o"></button>
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                      </form>
                    </td>
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