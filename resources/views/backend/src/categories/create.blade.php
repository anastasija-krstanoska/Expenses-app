@extends('backend.layouts.app')

@section('content')
    <br/>
    <br/>
    <!-- End Row-->
    <div class="row">
        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add new user</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/users/store/' . $user->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                   value="{{ $user->email ?? '' }}" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                   placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox2"
                                       name="example-checkbox2" value="option2">
                                <label class="custom-control-label" for="example-checkbox2">Check me Out</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 mb-0">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('/users/store/' . $user->id) }}" class="form-horizontal">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Edit user {{ $user->name }}</h4>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-md-3 col-form-label">User Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="inputName" name="name"
                                       value="{{ $user->name ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastname" class="col-md-3 col-form-label">Lastname</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="inputLastname" name="lastname"
                                       value="{{ $user->lastname ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="inputEmail" name="email"
                                       value="{{ $user->email ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                       placeholder="New Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9 offset-md-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="example-checkbox2"
                                           name="example-checkbox2" value="option2">
                                    <label class="custom-control-label" for="example-checkbox2">Check me Out</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9 offset-md-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
