@extends('masterAdmin')
@section('photos')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">


                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">

                        </div>

                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Add Photos</h5>
                                </div>

                                <form class="gy-3" enctype="multipart/form-data" method="POST" action="{{ route('addPhotos') }}">
                                    @csrf

                                    <div class="row g-3 align-center">
                                    <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <label for="event">Event</label><br>
                                                    <input class="form-control" type="text" id="event" name="event">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                <label for="image">images</label><br>
                                                <input type="file" id="image" name="images[]" multiple="multiple" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">All photos</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th> -->
                                                <th class="pro-id">Id</th>
                                                <th class="pro-thumb">Photo</th>
                                                <th class="pro-remove">Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($photos)
                                            @foreach($photos as $photo)
                                            <tr>

                                                <td>{{$photo->id}}</td>

                                                <td><img src="{{ url('photos/'.$photo->image) }}" width="140" height="150"></td>
                                                <td>
                                                    <form action="{{route('deletePhoto')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$photo->id}}" name="photo_id" id="photo_id">
                                                        <button type="submit" class="btn btn-danger btn-delete-catagory">Delete</button>
                                                    </form>
                                                </td>
                                                
                                            </tr>

                                            @endforeach
                                            @endif

                                </div>
                            </div>

                        </div>

                    </div><!-- .nk-block -->

                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
<!----Jquery----->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!--=====popper js=====-->
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<!--=====bootstrap=====-->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<!--=====Owl carousel=====-->
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('assets/js/script.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('assets/js/main.js')}}"></script>



@endsection