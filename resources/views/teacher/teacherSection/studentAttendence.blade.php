@extends('masterTeacher')
@section('changeTeacherPassword')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="row">
                                    <h4>Students Attendence</h4>
                                    @php
                                        date_default_timezone_set('Asia/Dhaka');
                                        $date = date('d-m-y');
                                    @endphp
                                    
                                    <h6>Date: {{$date}}</h6>
                                    <hr>

                                    <table class="table table-bordered " style="overflow-x: scroll">
                                        <thead>
                                            <tr>

                                                
                                                <th class="stock-status text-center alt-font">Name</th>
                                                <th class="stock-status text-center alt-font">Roll</th>
                                                <th class="product-price text-center alt-font">Student ID</th>
                                                
                                                <th class="product-subtotal text-center alt-font">Attendence</th>
                                                <th class="product-subtotal text-center alt-font">Attendence Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($studentAtt as $stuAttInfo)

                                            <tr>

                                                <form action="">

                                                   
                                                    <td>{{ $stuAttInfo->studentname_in_english }}</td>
                                                    <td>{{ $stuAttInfo->roll }}</td>
                                                    <td>
                                                        @php
                                                        $studentId = \App\Models\User::where('onlineadmissions_id','=',
                                                        $stuAttInfo->id)->get();
                                                        @endphp

                                                        {{ $studentId[0]->userId }}

                                                    </td>

                                                   
                                                    
                                                    <td>

                                                        <button class="btn btn-success stuAtt">P</button>
                                                        <button class="btn btn-danger stuAtt">A</button>

                                                    </td>

                                                    <td>
                                                        @php
                                                            date_default_timezone_set('Asia/Dhaka');
                                                            $date = date('y-m-d');

                                                        $attendenceStatus = \App\Models\StudentAttendence::where('todayDateAtt','=',
                                                        $date)->where('studentId','=',$studentId[0]->userId)->get();

                                                        @endphp

                                                        @if(count($attendenceStatus)>0 )
                                                        
                                                            {{ $attendenceStatus[0]->present }}

                                                        @endif
                                                       

                                                    </td>
                                                </form>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- <form method="POST" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-pass">Current Password <span class="required-f">*</span></label>
                                                <input name="password" id="input-pass" type="password" required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-newpass">New Password <span class="required-f">*</span></label>
                                                <input name="new-password" id="input-newpass" type="password" required>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary" type="submit">Save Change</button>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                    </div><!-- card -->
                </div><!-- .nk-block -->
            </div><!-- .components-preview -->
        </div>
    </div>
</div>


<script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/Javascript">
    $(".stuAtt").click(function(e){
e.preventDefault();



var $button = $(this);
var studentId = $button.parent().prev().html();
var attendence = $button.html();

console.log(studentId,attendence);

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$.ajax({
            type:'POST',
            url:"{{route('studentAttendence')}}",
            data:{studentId:studentId, attendence:attendence},
            success:function(data){
                
                console.log(data.att);

                var newAtt = $button.parent().next().text(data.att);
            }
        });


});
</script>

@endsection