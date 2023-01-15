@extends('masterAdmin')
@section('schedule')

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
                                    <h5 class="card-title">Add schedule</h5>
                                </div>

                                <form class="gy-3" method="POST" action="{{route('createScedule')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row g-3 align-center">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <lebel for="class">Class</lebel>
                                                    <select name="class" id="class" class="col-4">
                                                        <?php
                                                        $class = App\Models\Classinfo::select('class')->distinct()->get();

                                                        ?>
                                                        @foreach($class as $item)
                                                        <option value="{{$item->class}}">{{$item->class}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <lebel for="section">Section</lebel>
                                                    <select name="section" id="section" class="col-4">
                                                        <?php
                                                        $section = App\Models\Classinfo::select('section')->distinct()->get();

                                                        ?>
                                                        @foreach($section as $item)
                                                        <option value="{{$item->section}}">{{$item->section}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <lebel for="teacher">Teacher</lebel>
                                                    <select name="teacher" id="teacher" class="col-5">
                                                        @if($teachers)
                                                        @foreach($teachers as $item)
                                                        <option value="{{$item->teacherId}}">{{$item->teacherId}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row g-3 align-center">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <lebel for="day">Day</lebel>
                                                    <select name="day" id="day" class="col-6">
                                                        <option value="saturday">saturday</option>
                                                        <option value="sunday">sunday</option>
                                                        <option value="monday">monday</option>
                                                        <option value="tuesday">tuesday</option>
                                                        <option value="wednesday">wednesday</option>
                                                        <option value="thursday">thursday</option>
                                                        <option value="friday">friday</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <lebel for="subject">Subject</lebel>
                                                    <select name="subject" id="subject" class="col-5">
                                                        <?php
                                                        $subjects = App\Models\Teacher::select('subject')->distinct()->get();
                                                        echo ($subjects);
                                                        ?>
                                                        @foreach($subjects as $item)
                                                        <option value="{{$item->subject}}">{{$item->subject}}</option>
                                                        @endforeach


                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <lebel for="start">start</lebel>
                                                    <input type="time" class="start" id="start" name="start">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <lebel for="end">end</lebel>
                                                    <input type="time" class="end" id="end" name="end">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-7 offset-lg-5">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                </form>

                            </div>

                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">All Schedules</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th> -->
                                                <th class="pro-id">Class</th>
                                                <th class="pro-title">Section</th>
                                                <th class="pro-Day">Day</th>
                                                <th class="pro-teacher">Teacher</th>
                                                <th class="pro-subject">Subject</th>
                                                <th class="pro-start">Start</th>
                                                <th class="pro-end">End</th>
                                                <th class="pro-update">Update</th>
                                                <th class="pro-status">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($scedules)
                                            @foreach($scedules as $item)
                                            <tr>

                                                <td>{{$item->class}}</td>
                                                <td>{{$item->section}}</td>
                                                <td>{{$item->day}}</td>
                                                <td>{{$item->teacher_id}}</td>
                                                <td>{{$item->subject}}</td>
                                                <td>{{$item->start_time}}</td>
                                                <td>{{$item->end_time}}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_schedule_'.$item->id}}">
                                                        Update
                                                    </button>
                                                    <div class="modal fade" id="{{'update_schedule_' . $item->id}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="update_product_lebel">Update Scedule</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" class="d-flex flex-column" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row g-3 align-center">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <div class="form-control-wrap">
                                                                                        <input type="hidden" value="{{$item->id}}" id="update-id">
                                                                                        <lebel for="class">Choose class</lebel>
                                                                                        <select name="update-class" id="update-class" class="col-12">
                                                                                            <option data-display="{{$item->class}}">{{$item->class}}</option>
                                                                                            <?php
                                                                                            $class = App\Models\Classinfo::select('class')->distinct()->get();

                                                                                            ?>
                                                                                            @foreach($class as $i)
                                                                                            <option value="{{$i->class}}">{{$i->class}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <div class="form-control-wrap">
                                                                                        <lebel for="section">Choose section</lebel>
                                                                                        <select name="update-section" id="update-section" class="col-12">
                                                                                            <option data-display="{{$item->section}}">{{$item->section}}</option>
                                                                                            <?php
                                                                                            $section = App\Models\Classinfo::select('section')->distinct()->get();

                                                                                            ?>
                                                                                            @foreach($section as $i)
                                                                                            <option value="{{$i->section}}">{{$i->section}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row g-3 align-center">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <div class="form-control-wrap">
                                                                                        <lebel for="teacher">Choose teacher</lebel>
                                                                                        <select name="update-teacher" id="update-teacher" class="col-12">
                                                                                            <option data-display="{{$item->teacher_id}}">{{$item->teacher_id}}</option>
                                                                                            @if($teachers)
                                                                                            @foreach($teachers as $i)
                                                                                            <option value="{{$i->teacherId}}">{{$i->teacherId}}</option>
                                                                                            @endforeach
                                                                                            @endif
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <div class="form-control-wrap">
                                                                                        <lebel for="subject">Choose subject</lebel>
                                                                                        <select name="update-subject" id="update-subject" class="col-12">
                                                                                            <option data-display="{{$item->subject}}">{{$item->subject}}</option>
                                                                                            <?php
                                                                                            $subjects = App\Models\Teacher::select('subject')->distinct()->get();
                                                                                         
                                                                                            ?>
                                                                                            @foreach($subjects as $i)
                                                                                            <option value="{{$i->subject}}">{{$i->subject}}</option>
                                                                                            @endforeach

                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-3 align-center">
                                                                            <div class="col-lg-3">
                                                                                <div class="form-group">
                                                                                    <div class="form-control-wrap">
                                                                                        <lebel for="day">Day</lebel>
                                                                                        <select name="day" id="update-day" class="col-12">
                                                                                            <option data-display="{{$item->day}}">{{$item->day}}</option>
                                                                                            <option value="saturday">saturday</option>
                                                                                            <option value="sunday">sunday</option>
                                                                                            <option value="monday">monday</option>
                                                                                            <option value="tuesday">tuesday</option>
                                                                                            <option value="wednesday">wednesday</option>
                                                                                            <option value="thursday">thursday</option>
                                                                                            <option value="friday">friday</option>

                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-3">
                                                                                <div class="form-group">
                                                                                    <div class="form-control-wrap">
                                                                                        <lebel for="start">start</lebel>
                                                                                        <input type="time" class="start" id="update-start" name="start" value="{{$item->start_time}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-3">
                                                                                <div class="form-group">
                                                                                    <div class="form-control-wrap">
                                                                                        <lebel for="end">end</lebel>
                                                                                        <input type="time" class="end" id="update-end" name="end" value="{{$item->end_time}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                        </div>

                                                                    </form>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary btn-update-schedule">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal -->

                                                </td>
                                                <td>
                                                    <form action="{{route('deleteNav')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$item->id}}" name="nav_id" id="nav_id">
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


<!-----------modal scripts------------------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-----------end modal scripts------------------->



<script type="text/Javascript">
    $(".status").on("change", function() {
        var $select = $(this);
        var id = $select.parent().prev().find("input#nav_id").val();
        var status = $select.val();
        console.log(id,status);
        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateNavStatus') }}",
            data: {id:id,status:status},
            success:function(data){
                console.log('hiiiiiiiiiiiiiiiiii');
          }
       });
        

    });
</script>
<script>
    $(".btn-update").on("click", function() {
        console.log('hio');
    });
</script>

<script type="text/Javascript">



    $(".btn-update-schedule").on("click", function() {
    
    var $button = $(this);
    var id = $button.parent().prev().find("input#update-id").val();
    var className = $button.parent().prev().find("select#update-class").val();
    var section = $button.parent().prev().find("select#update-section").val();
    var teacher = $button.parent().prev().find("select#update-teacher").val();
    var subject = $button.parent().prev().find("select#update-subject").val();
    var day = $button.parent().prev().find("select#update-day").val();
    var start = $button.parent().prev().find("#update-start").val();
    var end = $button.parent().prev().find("#update-end").val();
    console.log(id,className,section,teacher,subject,day,start,end);
 
$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateScedule') }}",
            data: {id:id,class:className,section:section,teacher:teacher,subject:subject,day:day,start:start,end:end},
            success:function(data){
                toastr.success(data.success);
          }
       });
  
    }); 

</script>


@endsection