@extends('masterTeacher')
@section('salaryView')
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
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="product-name alt-font">Year</th>
                                                <th class="product-price text-center alt-font">Month</th>
                                                <th class="stock-status text-center alt-font">Amount</th>
                                                <th class="product-subtotal text-center alt-font">Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($salaries)
                                            @foreach($salaries as $item)
                                            <tr>
                                                <td>{{$item->year}}</td>
                                                <td>{{$item->month}}</td>
                                                <td>{{$item->salary}}</td>
                                                <td>

                                                    {{$item->status}}
                                                    </select>
                                                </td>
                                               
                                            </tr>
                                            @endforeach
                                            @endif


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                        @endsection