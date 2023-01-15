@extends('masterAdmin')
@section('noticeInput')

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
                                    <h5 class="card-title">Add Notice</h5>
                                </div>

                                <form class="gy-3" enctype="multipart/form-data" method="POST" action="{{ route('createNotice') }}">
                                    @csrf

                                    <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap ">
                                                    <input type="text" name="title" id="title" placeholder="Title" class="col-10">
                                                </div>
                                            </div>
                                    </div>


                                    <div class="row g-3 align-center">
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" type="text" id="notice" name="notice" value=""> </textarea>
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
                                    <h5 class="card-title">All Notice</h5>
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
                                                <th>Update</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($notices)
                                            @foreach($notices as $notice)
                                            <tr>

                                                <td>{{$notice->id}}</td>
                                                <td>{{$notice->title}}</td>
                                                <td>
                                                    <form action="{{route('deleteNotice')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$notice->id}}" name="notice_id" id="notice_id">
                                                        <button type="submit" class="btn btn-danger btn-delete-notice">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_product_'.$notice->id}}" >
                                                        Update
                                                    </button>
                                                    <div class="modal fade" id="{{'update_product_' . $notice->id}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="update_product_lebel">Update Product</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body ">
                                                                    <form action="" class="" enctype="multipart/form-data">
                                                                        @csrf

                                                                        <div class="row">
                                                                            <div class="">
                                                                                <input type="hidden" id="update_blogId" name="update_blogId" value="{{$notice->id}}">

                                                                                <label for="update_title">Title</label><br>
                                                                                <input type="text" id="update_title" name="update_title" value="{{$notice->title}}" class="col-12"><br><br>

                                                                            </div>
                                                                            <br>
                                                                            
                                                                        </div>
                                                                        <div class="row">
                                                                       
                                                                        </div>
                                                                        <div class="row">
                                                                        <textarea class="form-control update_description" type="text" id="update_description" name="update_description"  >  {{$notice->description}} </textarea>
                                                                        </div>



                                                                    </form>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary btn-update-product" >Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal -->

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
<script src="{{asset('adminFrontend/assets/js/ckeditor/ckeditor.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!--------------modal scripts------------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/Javascript">

    $(".btn-update-product").on("click", function() {
         
    var $button = $(this);
    var id = $button.parent().prev().find("input#update_blogId").val();
    var title =$button.parent().prev().find("input#update_title").val();
    var editordata = $button.parent().prev().find("textarea#update_description").val();
    console.log(id,title,editordata);

    var fd = new FormData();
    fd.append('id',id);
    fd.append('title',title);
    fd.append('editordata',editordata);
    
   
 
$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateNotice') }}",
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            success:function(data){
                toastr.success(data.success);
          }
       });
  
    });


</script>


@endsection


<!-- 
<form method="POST" action="{{ route('createCatagory') }}">
            @csrf
  <label for="catagoryName">Category name</label><br>
  <input type="text" id="catagoryName" name="catagoryName" value=""><br>
  <input type="submit" value="Submit">

        </form> -->