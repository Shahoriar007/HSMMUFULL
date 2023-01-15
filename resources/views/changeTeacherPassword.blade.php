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
                                    <h2>Change Password</h2>
                                    <hr>
                                    <form method="POST" action="{{route('changeTeacherPassword')}}" enctype="multipart/form-data">
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
                                    </form>
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