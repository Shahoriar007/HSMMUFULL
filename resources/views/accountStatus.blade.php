@extends('masterAdmin')
@section('accountStatus')

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
                                        <form action="{{route('accountStatusPost')}}" method="post" enctype="multipart/form-data">
                                            @csrf
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
                                            <button type="submit"> Submit</button>
                                        </form>
                                    </div>
                                    
                                </div>
                            

                            </div>

                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                            <div class="row">
                                <div class="col-lg-8 d-flex">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>Id</th>
                                                <th>Year</th>
                                                <th>Month</th>
                                                <th>Tution Fees</th>
                                                <th>Teacher Salaries</th>
                                                <th>Staff Salaries</th>
                                                <th>Electricity</th>
                                                <th>Water</th>
                                                <th>Balance</th>
                                            </thead>
                                            <tbody>
                                                @if(count($account) >0)
                                                <tr>
                                                <td>{{$account[0]->id}}</td>
                                                <td>{{$account[0]->year}}</td>
                                                <td>{{$account[0]->month}}</td>
                                                <td>{{$account[0]->total_tution_fees}}</td>
                                                <td>{{$account[0]->total_salaries}}</td>
                                                <td>{{$account[0]->staff_salaries}}</td>
                                               
                                                <td>{{$account[0]->electricity_bill}}</td>
                                                <td>{{$account[0]->water_bill}}</td>
                                                <td>{{$account[0]->total_tution_fees - $account[0]->total_salaries}}</td>
                                                
                                                </tr>
                                                @endif
                                            </tbody>

                                        </table>
                                       
                                       
                                    </div>
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