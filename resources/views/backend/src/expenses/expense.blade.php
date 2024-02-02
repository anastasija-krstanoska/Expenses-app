@extends('backend.layouts.app')

@section('content')
    <br/>
    <br/>




    <div class="form-group">
        <label for="inputName" class="col-md-6 form-label">ID</label>

        <p>{{$expense->id}}</p>

    </div>


    <div class="form-group">
        <label for="inputName" class="col-md-6 form-label">Expense Name</label>

        <p>{{$expense->name}}</p>

    </div>


    <div class="form-group">
        <label for="inputName" class="col-md-6 form-label">Expense Price</label>

        <p>{{$expense->price}}</p>

    </div>


    <div class="form-group">
        <label for="inputName" class="col-md-6 form-label">Expense User</label>

        <p>{{$expense->user->name}}</p>

    </div>
    <div class="form-group">
        <label for="inputName" class="col-md-6 form-label">Expense Category</label>
        <div class="col-md-14">
            <p>{{$expense->category->name}}</p>
        </div>
    </div>

@endsection
