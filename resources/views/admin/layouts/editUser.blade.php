@props(['user'])
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
                                <a href="../index.html"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Users</a>
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
                    <div class="card-header"><h3>Edit user {{$user->name}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputTitle">Name</label>
                                <input disabled type="text" class="form-control" id="exampleInputTitle" placeholder="Id" value="{{$user->id}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputTitle">Name</label>
                                <input  type="text" class="form-control" id="exampleInputTitle" placeholder="Name" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputSubtitle">Lastname</label>
                                <input type="text" class="form-control" id="exampleInputSubtitle" placeholder="Name" value="{{$user->lastname}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputSubtitle">Email</label>
                                <input type="text" class="form-control" id="exampleInputSubtitle" placeholder="Name" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label>Images upload</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                </div>
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
