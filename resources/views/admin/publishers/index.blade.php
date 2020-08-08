@extends('admin.layouts.master')

@push('title')
- Publisher
@endpush

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-2">Data Penerbit</h4>
        
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dt-buttons btn-group"> 
                  <a href="/add-publishers" class="btn btn-success"><span>Tambah penerbit</span></a>
                

                <button class="btn btn-warning buttons-print" tabindex="0" aria-controls="datatable-buttons" type="button">
                  <span>Print</span>
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
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 165.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 243.8px;" aria-label="Position: activate to sort column ascending">Nama Penerbit</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 118.8px;" aria-label="Office: activate to sort column ascending">Alamat Penerbit</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 118.8px;" aria-label="Office: activate to sort column ascending">ACTION</th>
                  </tr>
                </thead>

                <tbody>
                @foreach($publishers as $count=> $publisher)
                  <tr>
                    <td>{{$count+1}}</td>
                    <td>{{$publisher->publisher_name}}</td>
                    <td>{{$publisher->publisher_address}}</td> 
                    <td>
                      <form action="/publishers/{{$publisher->publisher_id}}" method="post">
                        <a href="edit-publishers/{{$publisher->publisher_id}}/edit" value="EDIT" class="btn btn-success" >Edit</a>
                        <input type="submit" name="submit" value="DELETE" class="btn btn-danger">
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