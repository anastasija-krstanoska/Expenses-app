<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">

                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="dashboard"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="dashboard">Models</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Users Table</li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Users Table</h3>
                    </div>

                    <div>
                        <span>      Here you can view all users . You can add,delete or update user.</span>

                        <button>
                            <div class="">
                                <a href="/users/create"><i class="ik ik-edit"></i><span>ADD NEW USER</span></a>
                            </div>
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                            <tr>
                                <th class="sorting">Id</th>
                                <th class="nosort">Avatar</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Email</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><img src="{{asset('template/img/users/1.jpg')}}" class="table-user-thumb"
                                             alt=""></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{$user->email}}</td>

                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="/users/{{ $user->id }}/edit"><i class="ik ik-edit-2"></i></a>


                                            <form id="delete-user-form-{{$user->id}}"
                                                  action="{{ url('/users/' . $user->id . '/delete') }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                        onclick="return confirm('Are you sure you want to delete this user?')">
                                                    <i class="ik ik-trash-2"></i>
                                                </button>
                                            </form>


                                        </div>
                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


{{--todo:Delete with script--}}

