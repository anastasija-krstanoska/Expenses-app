@props(['expenses'])
@props(['users'])
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">

                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href=""><i class="ik ik-home"></i></a>
                                {{--TODO: links--}}
                            </li>
                            <li class="breadcrumb-item">
                                <a href="dashboard">Models</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Expense</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>Expenses Table</h3>
                        <span>Here you can view all expenses . You can add,delete or update expense.</span>
                    </div>
                    <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Expense Name</th>
                                    <th>Price</th>
                                    <th>User</th>
                                    <th>Category</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expenses as $expense)
                                    <tr>
                                        <th scope="row">{{$expense->id}}</th>

                                        <td>{{$expense->name}}</td>
                                        <td>{{$expense->price}}</td>
                                        <td>{{$expense->user->name}}</td>
                                        <td>{{$expense->category->name}}</td>

                                        <td>
                                            <div class="table-actions">
                                                {{--TODO:Link na href kon crud--}}
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="/expenses/{{ $expense->id }}/edit"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
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
</div>
