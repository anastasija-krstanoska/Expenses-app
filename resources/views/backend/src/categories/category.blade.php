@extends('backend.layouts.app')

@section('content')
    <br/>
    <br/>
    <!-- ROW-1 OPEN -->
    <div class="row" id="user-profile">
        <div class="col-lg-12">

            <div class="tab-content">

                <div class="tab-pane" id="tab-71">
                    <div class="row  mb-5 img-gallery" id="lightgallery">
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/8.jpg"
                             data-src="../../assets/images/media/8.jpg">
                            <a href="#"><img class="img-fluid mb-2 br-7" src="../../assets/images/media/8.jpg "
                                             alt="banner image"></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/10.jpg"
                             data-src="../../assets/images/media/10.jpg">
                            <a href="#"><img class="img-fluid mb-2 br-7" src="../../assets/images/media/10.jpg"
                                             alt="banner image "></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/11.jpg"
                             data-src="../../assets/images/media/11.jpg">
                            <a href="#"><img class="img-fluid  mb-2 br-7" src="../../assets/images/media/11.jpg"
                                             alt="banner image "></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/12.jpg"
                             data-src="../../assets/images/media/12.jpg">
                            <a href="#"><img class="img-fluid  mb-2 br-7" src="../../assets/images/media/12.jpg"
                                             alt="banner image "></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/13.jpg"
                             data-src="../../assets/images/media/13.jpg">
                            <a href="#"><img class="img-fluid  mb-2 br-7"
                                             src="../../assets/images/media/13.jpg "
                                             alt="banner image"></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/14.jpg"
                             data-src="../../assets/images/media/14.jpg">
                            <a href="#"><img class="img-fluid  mb-2 br-7"
                                             src="../../assets/images/media/14.jpg "
                                             alt="banner image"></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/15.jpg"
                             data-src="../../assets/images/media/15.jpg">
                            <a href="#"><img class="img-fluid mb-2 br-7" src="../../assets/images/media/15.jpg "
                                             alt="banner image"></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/16.jpg"
                             data-src="../../assets/images/media/16.jpg">
                            <a href="#"><img class="img-fluid mb-0 br-7" src="../../assets/images/media/16.jpg "
                                             alt="banner image"></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/17.jpg"
                             data-src="../../assets/images/media/17.jpg">
                            <a href="#"><img class="img-fluid mb-0 br-7" src="../../assets/images/media/17.jpg "
                                             alt="banner image"></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/18.jpg"
                             data-src="../../assets/images/media/18.jpg">
                            <a href="#"><img class="img-fluid mb-0 br-7" src="../../assets/images/media/18.jpg "
                                             alt="banner image"></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/19.jpg"
                             data-src="../../assets/images/media/19.jpg">
                            <a href="#"><img class="img-fluid mb-0 br-7" src="../../assets/images/media/19.jpg "
                                             alt="banner image"></a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/20.jpg"
                             data-src="../../assets/images/media/20.jpg">
                            <a href="#"><img class="img-fluid br-7" src="../../assets/images/media/20.jpg "
                                             alt="banner image"></a>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class=" row mb-4">
                    <label for="inputName" class="col-md-6 form-label">Category ID</label>
                    <div class="col-md-14">
                        <p>{{$category->id}}</p>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label for="inputName" class="col-md-6 form-label">Category Name</label>
                    <div class="col-md-14">
                        <p>{{$category->name}}</p>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- ROW-1 CLOSED -->
@endsection
