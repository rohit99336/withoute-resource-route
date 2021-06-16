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
            User Detail
        </div>
        {{-- <div class="card-body">
            <div class="table-responsive">
                <div class="row">
                    @foreach ($users as $index => $data)
                    <div class="col-md-6">
                        Name - {{$data->name}} <br>
                        Email - {{$data->email}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Detail</h3>
                        </div>
                        <div class="card-body">
                            @foreach ($users as $index => $data)
                            <form>
                                <div class="form-group">
                                    <label class="small mb-1" for="Name">Name</label>
                                    <input class="form-control py-4" id="Name" type="text"
                                        placeholder="{{$data->name}}" value="{{$data->name}}" disabled/>
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control py-4" id="email" type="text"
                                        placeholder="{{$data->email}}" value="{{$data->email}}" disabled/>
                                </div>

                                {{-- <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="rememberPasswordCheck"
                                            type="checkbox" />
                                        <label class="custom-control-label" for="rememberPasswordCheck">Remember
                                            password</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="password.html">Forgot Password?</a>
                                    <a class="btn btn-primary" href="index.html">Login</a>
                                </div> --}}
                            </form>
                            @endforeach
                        </div>
                        {{-- <div class="card-footer text-center">
                            <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
