@extends('masterAdmin')
@section('teacherSalary')

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
                                    <h5 class="card-title">Salary</h5>
                                </div>

                                <form class="gy-3" enctype="multipart/form-data" method="POST" action="{{route('teacherSalaryGenerate')}}">
                                    @csrf

                                    <div class="row g-3 align-center">
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select name="year" id="year">
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                        <option value="2033">2033</option>
                                                        <option value="2034">2034</option>
                                                        <option value="2035">2035</option>
                                                        <option value="2036">2036</option>
                                                        <option value="2037">2037</option>
                                                        <option value="2038">2038</option>
                                                        <option value="2039">2039</option>
                                                        <option value="2040">2040</option>
                                                        <option value="2041">2041</option>
                                                        <option value="2042">2042</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3 align-center">
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select name="month" id="month">
                                                        <option value="jan">January</option>
                                                        <option value="feb">February</option>
                                                        <option value="mar">March</option>
                                                        <option value="apr">April</option>
                                                        <option value="may">May</option>
                                                        <option value="jun ">June</option>
                                                        <option value="jul">July</option>
                                                        <option value="aug">August</option>
                                                        <option value="sep">September</option>
                                                        <option value="oct">October</option>
                                                        <option value="nov">November</option>
                                                        <option value="dec">December</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <button type="submit">Generate Teacher salary</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    
                                </form>

                            </div>

                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">All Tution fees</h5>
                                </div>
                                <div style="overflow-x: auto;">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="pro-id">Id</th>
                                                <th class="pro-text">Teacher Id</th>
                                                <th class="pro-image">Salary</th>
                                                <th>Year</th>
                                                <th>Month</th>
                                                <th>Status</th>
                                                <th class="pro-status">Action</th>
                                                <th>Salary Invoice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($allSalaries)
                                            @foreach($allSalaries as $salary)
                                            <tr>
                                                <td id="salary_id">{{$salary->id}}</td>
                                                <td >{{$salary->teacherId}}</td>
                                                <td id="salary_amount">{{$salary->salary}}</td>
                                                <td id="salary_year">{{$salary->year}}</td>
                                                <td id="salary_month">{{$salary->month}}</td>
                                                <td>{{$salary->status}}</td>
                                                <td>
                                                    
                                                        <select name="status" id="status" class="status">
                                                            
                                                            <option value="pending">pending</option>
                                                            <option value="paid">paid</option>
                                                        </select>
                                                    
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/salary/teacher/print')}}/{{$salary->id}}"><i class="fas fa-print" aria-hidden="true">Print</i></a>
                                                </td>

                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                                <th class="pro-id">Id</th>
                                                <th class="pro-text">Teacher Id</th>
                                                <th class="pro-image">Salary</th>
                                                <th>Year</th>
                                                <th>Month</th>
                                                <th>Status</th>
                                                <th class="pro-status">Action</th>
                                                <th>Salary Invoice</th>
                                        </tfoot>
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


<script type="text/Javascript">
    $(".status").on("change", function() {
        var $select = $(this);
        var id = $select.parent().siblings("td#salary_id").text();
        var amount = $select.parent().siblings("td#salary_amount").text();
        var year = $select.parent().siblings("td#salary_year").text();
        var month = $select.parent().siblings("td#salary_month").text();
        var status = $select.val();
        console.log(id,status,amount,year,month);
        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateSalaryStatus') }}",
            data: {id:id,status:status,amount:amount,year:year,month:month},
            success:function(data){
                console.log(data.account);
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