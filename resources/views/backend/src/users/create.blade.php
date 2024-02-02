@extends('backend.layouts.app')

@section('content')
    <br/>
    <br/>
    <!-- End Row-->
    <div class="row">
        <div class="col-lg-15 col-xl-6 col-md-15 col-sm-15">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">Add new user</h4>
                </div>


                <div class="col-lg-15 col-xl-6 col-md-15 col-sm-15">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title" @if($user != null) value="{!! $user->name !!}"@endif >Edit</h4>
                        </div>
                        <div class="card-body">

                            <form class="create-user-form"
                                  action="{{ $user ? url('/users/store/' . $user->id) : url('/users/store') }}"
                                  method="POST">


                                <div class=" row mb-4">
                                    <label for="inputName" class="col-md-6 form-label">User Name</label>
                                    <div class="col-md-14">
                                        <input type="text" name="name" @if($user != null) value="{!! $user->name !!}"
                                               @endif  class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>


                                <div class=" row mb-4">
                                    <label for="inputLastname" class="col-md-6 form-label">User Lastname</label>
                                    <div class="col-md-14">
                                        <input type="text" name="lastname"
                                               @if($user != null) value="{!! $user->lastname !!}"
                                               @endif class="form-control" id="inputLastname" placeholder="Lastname">
                                    </div>
                                </div>


                                <div class=" row mb-4">
                                    <label for="inputEmail" class="col-md-6 form-label">Email</label>
                                    <div class="col-md-14">
                                        <input type="email" name="email" @if($user != null) value="{!! $user->email !!}"
                                               @endif  class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>

                                <div class=" row mb-4">
                                    <label for="inputPassword" class="col-md-6 form-label">Password</label>
                                    <div class="col-md-14">
                                        <input type="password" name="password"
                                               @if($user != null) value="{!! $user->password !!}"
                                               @endif class="form-control" id="inputPassword"
                                               placeholder="Password">
                                    </div>
                                </div>


                                @csrf
                                <div class="card-footer text-right">
                                    <button type="submit"
                                            onclick="return confirm('Are you sure you want to edit this user?')"
                                            class="btn btn-secondary mr-2"> Save
                                    </button>
                                    <button href="/users" class="btn btn-dark">Cancel</button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
@endsection
