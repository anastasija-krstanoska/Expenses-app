@props(['category'])
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
                                <a href="dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="users">Users</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Edit category {{$category->name}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputTitle">Category Id</label>
                                <input disabled type="text" class="form-control" id="exampleInputTitle" placeholder=" "
                                       value="{{$category->id}} ">
                                <label for="exampleInputTitle">Name</label>
                                <input type="text" class="form-control" id="exampleInputTitle" placeholder="Name"
                                       value="{{$category->name}}">
                            </div>


                        </form>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-secondary mr-2">Save Changes</button>
                        <button class="btn btn-dark">Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
