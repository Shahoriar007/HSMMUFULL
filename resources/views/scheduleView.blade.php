@extends('masterTeacher')
@section('scheduleView')

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
                                <div class="row">
                                    <div class="col-lg-4">
                                        <form action="{{route('classRoutine')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <select name="day" id="day">
                                            
                                                <option value="saturday">saturday</option>
                                                <option value="sunday">Sunday</option>
                                                <option value="monday">Monday</option>
                                                <option value="tuesday">Tuesday</option>
                                                <option value="wednesday">wednesday</option>
                                                <option value="thursday">Thursday</option>
                                            </select>
                                            <button type="submit"> Submit</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-8">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>start time</th>
                                                <th>end time</th>
                                                <th>class</th>
                                                <th>section</th>
                                                <th>subject</th>
                                                <th>day</th>
                                            </thead>
                                            <tbody>
                                                @if($schedules)
                                                @foreach($schedules as $schedule )
                                                
                                                <td>{{$schedule->start_time}}</td>
                                                <td>{{$schedule->end_time}}</td>
                                                <td>{{$schedule->class}}</td>
                                                <td>{{$schedule->section}}</td>
                                                <td>{{$schedule->subject}}</td>
                                                <td>{{$schedule->day}}</td>
                                                
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                            </div>

                        </div><!-- card -->


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
        var id = $select.parent().prev().find("input#slider_id").val();
        var status = $select.val();
        console.log(id,status);
        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateSliderStatus') }}",
            data: {id:id,status:status},
            success:function(data){
                console.log('hiiiiiiiiiiiiiiiiii');
          }
       });
        

    });
</script>



@endsection




<!-- <form enctype="multipart/form-data" method="POST" action="{{ route('createSlider') }}">
            @csrf

  <label for="sliderText">Text</label><br>
  <input type="text" id="sliderText" name="sliderText" value=""><br><br>
  <label for="image">image</label><br>
  <input type="file" id="image" name="image" />
    </select>
    <input type="submit" value="Submit">
   

        </form> -->