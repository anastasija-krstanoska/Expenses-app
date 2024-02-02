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
                            <h4 class="card-title" @if($category != null) value="{!! $category->name !!}"@endif >
                                Edit</h4>
                        </div>
                        <div class="card-body">

                            <form class="create-category-form"
                                  action="{{ $category ? url('/categories/store/' .$category->id) : url('/categories/store') }}"
                                  method="POST">


                                <div class="form-group">
                                    <label for="id" class="col-md-6 form-label">ID</label>
                                    <div class="col-md-14">
                                        <input disabled type="text" name="id"
                                               @if($category != null) value="{!! $category->id !!}"
                                               @endif  class="form-control" id="id" placeholder="Automatic generated">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="name" class="col-md-6 form-label">Category Name</label>
                                    <div class="col-md-14">
                                        <input type="text" name="name"
                                               @if($category != null) value="{!! $category->name !!}"
                                               @endif  class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>


                                @csrf


                                <div class="card-footer text-right">
                                    <button type="submit"
                                            onclick="return confirm('Are you sure you want to edit this category?')"
                                            class="btn btn-secondary mr-2"> Save
                                    </button>
                                    <button href="/categories" class="btn btn-dark">Cancel</button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
@endsection
