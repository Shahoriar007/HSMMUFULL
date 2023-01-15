@extends('masterAdmin')
@section('blog')

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
                                    <h5 class="card-title">Add Blog</h5>
                                </div>

                                <form class="gy-3" enctype="multipart/form-data" method="POST" action="{{ route('createBlog') }}">
                                    @csrf

                                    <div class="row g-3 align-center">
                                    <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input class="form-control" type="text" id="title" name="title" value="" placeholder="Title" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" type="text" id="blog" name="blog" value=""> </textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">

                                                <label for="catagory">Choose a catagory:</label>
                                                <select name="catagory" id="catagory">
                                                    @foreach($catagories as $catagory )
                                                    @if($catagory->status == "enable")
                                                    <option value="{{$catagory->id}}">{{$catagory->catagoryName}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
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
                                    <h5 class="card-title">All Blogs</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th> -->
                                                <th class="pro-id">Id</th>
                                                <th class="pro-name">Title</th>
                                                <th class="pro-name">Catagory</th>
                                                <th class="pro-remove">Delete</th>
                                                <th class="pro-status">Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($blogs)
                                            @foreach($blogs as $blog)
                                            <tr>
                                                <td>{{$blog->id}}</td>
                                                <td>{{$blog->title}}</td>
                                                <td>{{$blog->blogcatagory_id}}</td>
                                                <td>
                                                    <form action="{{route('deleteBlog')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$blog->id}}" name="blog_id" id="blog_id">
                                                        <button type="submit" class="btn btn-danger btn-delete-catagory">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_product_'.$blog->id}}" onclick="test('<?php echo $blog->id;?>')">
                                                        Update
                                                    </button>
                                                    <div class="modal fade" id="{{'update_product_' . $blog->id}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
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
                                                                                <input type="hidden" id="update_blogId" name="update_blogId" value="{{$blog->id}}">

                                                                                <label for="update_title">Title</label><br>
                                                                                <input type="text" id="update_title" name="update_title" value="{{$blog->title}}" class="col-12"><br><br>

                                                                            </div>
                                                                            <br>
                                                                            
                                                                        </div>
                                                                        <div class="row">
                                                                       \
                                                                        </div>
                                                                        <div class="row">
                                                                        <textarea class="form-control update_description" type="text" id="update_description" name="update_description"  >  {{$blog->description}} </textarea>
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
<!--=====CKeditor=====-->
<script src="{{asset('adminFrontend/assets/js/ckeditor/ckeditor.js')}}"></script>



<!--------------modal scripts------------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js')}}"></script>
<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js')}}"> </script>
<script src="{{ asset('http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap-modal.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap-transition.js')}}"></script>




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
            url:"{{ route('updateBlog') }}",
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