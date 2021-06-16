@extends('layout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Users</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            All Users
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>S.no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $index => $data)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>

                                <a type="button" class="btn btn-primary" href="{{url('detailUser')}}/{{ $data->id}}"
                                    title="View"><i class="far fa-eye"></i></a>


                                <a type="button" class="btn btn-info" href="{{url('editUser')}}/{{ $data->id}}"
                                    title="Edit"><i class="fas fa-edit"></i></a>

                                <a type="button" class="btn btn-danger" href="{{url('delUser')}}/{{ $data->id}}"
                                    title="Delete"><i class="far fa-trash-alt"></i></a>

                                {{-- @if ($data->id == Auth::user()->id)
                                    <a type="button" class="btn btn-danger" href="{{url('delUser')}}/{{ $data->id}}"
                                title="Delete" disabled><i class="far fa-trash-alt"></i></a>
                                @else
                                <a type="button" class="btn btn-danger" href="{{url('delUser')}}/{{ $data->id}}"
                                    title="Delete"><i class="far fa-trash-alt"></i></a>
                                @endif --}}
                            </td>

                        </tr>
                        @endforeach


                        {{-- <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userView">
                            Launch demo modal
                        </button> --}}

                        <!-- Modal -->
                        {{-- <div class="modal fade" id="userView" tabindex="-1" aria-labelledby="userViewLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">User Detail</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                Name - 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
