@extends('backend.layouts.app')

@section('content')
    <br/>
    <br/>
    <!-- End Row-->
    <div class="row">
        <div class="col-lg-15 col-xl-6 col-md-15 col-sm-15">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">Add new category</h4>
                </div>


                <div class="col-lg-15 col-xl-6 col-md-15 col-sm-15">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" @if($expense != null) value="{!! $expense->name !!}"@endif >
                                Edit</h4>
                        </div>
                        <div class="card-body">

                            <form class="create-category-form"
                                  action="{{ $expense ? url('expenses/store/' .$expense->id) : url('/expenses/store') }}"
                                  method="POST">


                                <div class="form-group">
                                    <label for="id" class="col-md-6 form-label">ID</label>
                                    <div class="col-md-14">
                                        <input disabled type="text" name="id"
                                               @if($expense != null) value="{!! $expense->id !!}"
                                               @endif  class="form-control" id="id" placeholder="Automatic generated">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="name" class="col-md-6 form-label">Expense Name</label>
                                    <div class="col-md-14">
                                        <input type="text" name="name"
                                               @if($expense != null) value="{!! $expense->name !!}"
                                               @endif  class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="price" class="col-md-6 form-label">Expense Price</label>
                                    <div class="col-md-14">
                                        <input type="text" name="price"
                                               @if($expense != null) value="{!! $expense->price !!}"
                                               @endif  class="form-control" id="price" placeholder="price">
                                    </div>
                                </div>

                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="user" class="col-md-6 form-label">Expense User</label>--}}
                                {{--                                    <div class="col-md-14">--}}
                                {{--                                        <input type="text" name="user"--}}
                                {{--                                               @if($expense != null) value="{!! $expense->user->name !!}"--}}
                                {{--                                               @endif  class="form-control" id="user" placeholder="Name">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="form-group">
                                    <label for="user" class="col-md-6 form-label">Expense User</label>
                                    <div class="col-md-14">
                                        <select name="user" class="form-control" id="user" >
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}"
                                                        @if($expense && $expense->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cat" class="col-md-6 form-label">Expense User</label>
                                    <div class="col-md-14">
                                        <select name="cat" class="form-control" id="cat">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                        @if($expense && $expense->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>




                                @csrf


                                <div class="card-footer text-right">
                                    <button type="submit"
                                            onclick="return confirm('Are you sure you want to edit this category?')"
                                            class="btn btn-secondary mr-2"> Save
                                    </button>
                                    <button href="/expenses" class="btn btn-dark">Cancel</button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
@endsection
