@extends('masterStudent')
@section('studentTutionFees')
<!--Body Content-->

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">


                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">

                        </div>

                        <div class="card card-bordered">


                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Tution Fees</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="pro-id">Year</th>
                                                <th class="pro-title">Month</th>
                                                <th class="pro-status">Amount</th>
                                                <th class="pro-status">Status</th>
                                                <th class="pro-status">Pay</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($tution_fees)
                                            @foreach($tution_fees as $item)
                                            <tr>
                                                <td>{{$item->year}}</td>
                                                <td>{{$item->month}}</td>
                                                <td>{{$item->tution_fee}}</td>
                                                <td>

                                                    {{$item->status}}
                                                    </select>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Pay</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif


                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>

                    </div><!-- .nk-block -->

                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>

<!--End Body Content-->

@endsection