@extends('masterAdmin')
@section('blogCatagory')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">


                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">

                            </div>
                        </div>

                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Add Catagory</h5>
                                </div>

                                <form class="gy-3" enctype="multipart/form-data" method="POST" action="{{ route('createCatagory') }}">
                                    @csrf

                                    <div class="row g-3 align-center">

                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input class="form-control" type="text" id="catagoryName" name="catagoryName" value="" placeholder="Catagory name">
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
                                    <h5 class="card-title">All Catagory</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th> -->
                                                <th class="pro-id">Id</th>
                                                <th class="pro-name">Name</th>
                                                <th class="pro-remove">Delete</th>
                                                <th class="pro-status">status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($catagories)
                                            @foreach($catagories as $catagory)
                                            <tr>

                                                <td>{{$catagory->id}}</td>
                                                <td>{{$catagory->catagoryName}}</td>
                                                <td>
                                                    <form action="{{route('deleteCatagory')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$catagory->id}}" name="catagory_id" id="catagory_id">
                                                        <button type="submit" class="btn btn-danger btn-delete-catagory">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <select name="status" id="status" class="btn btn-success status">
                                                        <option data-display="{{$catagory->status}}">{{$catagory->status}}</option>
                                                        <option value="enable">Enable</option>
                                                        <option value="disable">Disable</option>
                                                    </select>
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
<script src="{{ asset('adminFrontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<!--=====popper js=====-->
<script src="{{ asset('adminFrontend/assets/js/popper.min.js')}}"></script>
<!--=====bootstrap=====-->
<script src="{{ asset('adminFrontend/assets/js/bootstrap.min.js')}}"></script>
<!--=====Owl carousel=====-->
<script src="{{ asset('adminFrontend/assets/js/owl.carousel.min.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('adminFrontend/assets/js/script.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('adminFrontend/assets/js/main.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/Javascript">
     $(".status").on("change", function() {
        var $select = $(this);
        var id = $select.parent().prev().find("input#catagory_id").val();
        var status = $select.val();
        console.log(id,status);
        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateCatagoryStatus') }}",
            data: {id:id,status:status},
            success:function(data){
                console.log('hiiiiiiiiiiiiiiiiii');
          }
       });
        

    });
</script>


@endsection

