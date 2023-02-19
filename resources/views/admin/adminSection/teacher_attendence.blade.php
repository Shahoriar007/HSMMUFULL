@extends('masterAdmin')
@section('teacherApplicationForm')



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

                                <form method="POST" action="{{ route('teacherAttendencePost') }}">
                                    @csrf

                                    <div class="row">

                                    @php 

                                    date_default_timezone_set('Asia/Dhaka');
                                    $date = date('y-m-d');

                                    $time = date('h:i:sa');

                                    @endphp

                                        <h4>Intime:</h4>
                                        
                                        <input type="text" id="todayDate" name="todayDate" value="{{$date}}" class="form-control"
                                            hidden>
                                        

                                        <div class="form-group col-md-4">
                                            <label for="labelName">Teacher Id</label>
                                            <input type="text" id="teacherId" name="teacherId" class="form-control"
                                                required>
                                        </div>

                                        
                                        <input type="text" id="inTime" name="inTime"  value="{{$time}}" class="form-control" hidden>
                                      



                                        <div class="form-group col-md-2" style="margin-top:25px">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>


                                </form>
                            </div>

                            <div class="card-inner">

                                <form method="POST" action="{{ route('teacherAttendenceUpdate') }}">
                                    @csrf

                                    <div class="row">

                                    <h4>Outtime:</h4>

                                        <input type="text" id="todayDate" name="todayDate" value="{{$date}}" class="form-control"
                                                hidden>
                                        

                                        <div class="form-group col-md-4">
                                            <label for="labelName">Teacher Id</label>
                                            <input type="text" id="teacherId" name="teacherId" class="form-control"
                                                required>
                                        </div>

                                    
                                        <input type="text" id="outTime" name="outTime" value="{{$time}}" class="form-control" hidden>
                                        



                                        <div class="form-group col-md-2" style="margin-top:25px">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>


                                </form>
                            </div>





                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Teachers Attendence</h5>
                                </div>
                                <div style="overflow-x: auto;">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Teacher ID</th>
                                                <th>Teacher Name</th>
                                                <th>In Time</th>
                                                <th>Out Time</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($teacher as $teacherAttendence)
                                            <tr>
                                                <td>{{$teacherAttendence->todayDate}}</td>
                                                <td>{{$teacherAttendence->teacherId}}</td>

                                                @php
                                                $teacherMoreInfo = \App\Models\Teacher::where(['teacherId' =>
                                                $teacherAttendence->teacherId])->pluck('name');

                                                @endphp

                                                <td>{{$teacherMoreInfo[0]}}</td>
                                                <td>{{$teacherAttendence->inTime}}</td>
                                                <td>{{$teacherAttendence->outTime}}</td>



                                            </tr>

                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Date</th>
                                                <th>Teacher ID</th>
                                                <th>Teacher Name</th>
                                                <th>In Time</th>
                                                <th>Out Time</th>

                                            </tr>

                                        </tfoot>
                                    </table>

                                    <div class="modal" tabindex="-1" role="dialog">


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

        $(document).ready(function () {
        
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
   
</script>


    @endsection