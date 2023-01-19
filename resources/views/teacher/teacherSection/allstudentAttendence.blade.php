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
                                    <h4>Students Attendence Table</h4>

                                    @if($students != null)
                                    <h6>Class: {{$students[0]->class}}</h6>
                                    <h6>Section: {{$students[0]->section}}</h6>
                                    @endif
                                    <hr>

                                    <table class="table table-bordered " style="overflow-x: scroll">
                                        <thead>
                                            <tr>

                                                <th class="stock-status text-center alt-font">Date</th>
                                                <th class="stock-status text-center alt-font">Student Id</th>
                                                <th class="product-price text-center alt-font">Attendence</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($students as $data)                                            

                                            <tr>
 
                                                    <td>{{ $data->todayDateAtt }}</td>
                                                    <td>{{ $data->studentId }}</td>
                                                    <td>{{ $data->present }}</td>


                                            </tr>

                                            @endforeach

                                           
                                        </tbody>
                                    </table>

                                    {{ $students->links() }}
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- card -->
                </div><!-- .nk-block -->
            </div><!-- .components-preview -->
        </div>
    </div>
</div>


@endsection