@extends('master')
@section('userDashboard')
<!--Body Content-->
<div id="page-content" style="width: 80%;margin: 50px auto;">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tution Fee</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Settings</a>
        </li>
        <li>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-white btn-dim btn-outline-danger">Logout</button>

            </form>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            
        <h2>Change Password</h2>
            <hr>
            <form method="POST" action="{{route('changePassword')}}" enctype="multipart/form-data">
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
                <button class="btn" type="submit">Save Change</button>
            </form>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <h3>Tution Fee</h3>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="product-name alt-font">Year</th>
                        <th class="product-price text-center alt-font">Month</th>
                        <th class="stock-status text-center alt-font">Amount</th>
                        <th class="product-subtotal text-center alt-font">Status</th>
                        <th class="product-subtotal text-center alt-font">Pay</th>
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
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Settings</div>
    </div>
</div>

<!--End Body Content-->

@endsection