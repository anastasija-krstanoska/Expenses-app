@props(['categories'])
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
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>Categories Table</h3>
                        <span>Here you can view all categories . You can add,delete or update category.</span>
                        <button>
                            <div class="">
                                <a href="/categories/create"><i class="ik ik-edit"></i><span>ADD NEW CATEGORY</span></a>
                            </div>
                        </button>
                    </div>
                    <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>

                                            <a href="/categories/{{ $category->id }}/edit"><i class="ik ik-edit-2"></i></a>
                                            <a href=" "><i class="ik ik-trash-2"></i></a>
                                            {{--                                            todo: delete--}}
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
