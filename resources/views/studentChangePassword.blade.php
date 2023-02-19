@extends('masterStudent')
@section('studentChangePassword')

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
                                    <h5 class="card-title">Change Password</h5>
                                </div>
                                <div>
                                <form method="POST" action="{{route('changePasswordPost')}}" enctype="multipart/form-data">
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
                            </div>

                        </div>

                    </div><!-- .nk-block -->

                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>



@endsection



