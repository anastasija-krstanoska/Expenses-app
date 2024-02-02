@extends('backend.layouts.app')

@section('content')
    <br/>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Expenses Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                <thead class="border-top">
                                <tr>
                                    <th class="bg-transparent border-bottom-0 w-5">ID</th>
                                    <th class="bg-transparent border-bottom-0">Name</th>
                                    <th class="bg-transparent border-bottom-0">Price</th>
                                    <th class="bg-transparent border-bottom-0">User</th>
                                    <th class="bg-transparent border-bottom-0">Category</th>
                                    <th class="bg-transparent border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <button type="button" class="btn btn-outline-success">
                                    <div class="">

                                        <a href="/expenses/store"><i
                                                    class="ik ik-edit"></i><span>ADD NEW Expense</span></a>
                                    </div>
                                </button>


                                @foreach($expenses as $expense)
                                    <tr class="border-bottom">
                                        <td class="text-muted fs-15 fw-semibold text-center">{{$expense->id}}.
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <h6 class="mb-0 fs-15 fw-semibold">{{$expense->name}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted fs-15 fw-semibold"> {{$expense->price}} MKD</td>
                                        <td class="text-muted fs-15 fw-semibold">{{ optional($expense->user)->name }}</td>
                                        <td class="text-success fs-15 fw-semibold">{{optional($expense->category)->name}}</td>
                                        <td class="">
                                            {{-- edit--}}

                                            <a href="/expenses/store/{{ $expense->id }}"

                                               class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip"
                                               data-bs-original-title="Edit"><i>
                                                    <svg class="table-edit" xmlns="http://www.w3.org/2000/svg"
                                                         height="20"
                                                         viewBox="0 0 24 24" width="16">
                                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                                        <path
                                                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/>
                                                    </svg>
                                                </i>

                                            </a>
                                            {{--delete--}}


                                            <form id="delete-user-form-{{$expense->id}}"
                                                  action="{{ url('/expenses/delete/' . $expense->id ) }}"
                                                  method="POST">
                                                @csrf
                                                <button type="submit"
                                                        onclick="return confirm('Are you sure you want to delete this expense?')"
                                                        class="btn btn-danger btn-sm rounded-11 me-2"
                                                        data-bs-toggle="tooltip">


                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path
                                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                    </svg>

                                                    <i class="ik ik-trash-2"></i>
                                                </button>
                                            </form>


                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
        </div><!-- ROW-5 END -->     </div>
@endsection
