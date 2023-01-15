@extends('masterAdmin')
@section('onlineApplications')

                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    

                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Class, section, roll  input Section</h4>
                                                <div class="nk-block-des">
                                                    <p>You can make style out your setting related form as per below example.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                               

                                                <form class="gy-3" method="POST" action="{{ route('admission_form_approve', $studentInfo->id) }}" >
                                                @csrf

                                                <input type="hidden" name="id" value="{{ $studentInfo->id }}">
                                                <input type="hidden" name="studentname_in_english" value="{{ $studentInfo->studentname_in_english }}">
                                                <input type="hidden" name="status" value="{{ $studentInfo->status }}">
                                                

                                                <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name">Class</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="admitted_class" name="admitted_class" value="{{ $studentInfo->admitted_class }}" placeholder="{{ $studentInfo->admitted_class }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                </div>
                                                <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name">Section</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="admitted_section" name="admitted_section" value="{{ $studentInfo->admitted_section }}" placeholder="{{ $studentInfo->admitted_section }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                </div>
                                               
                                                <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name">Roll</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="roll" name="roll" value="{{ $studentInfo->roll }}" placeholder="{{ $studentInfo->admitted_section }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                </div>

                                                <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name">Tution Fee</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="tution_fee" name="tution_fee" value="{{ $studentInfo->tution_fee }}" placeholder="{{ $studentInfo->tution_fee }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                </div>

                                                    
                                                    <div class="row g-3">
                                                        <div class="col-lg-7 offset-lg-5">
                                                            <div class="form-group mt-2">
                                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

                                        </div><!-- card -->

                                    </div><!-- .nk-block -->

                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->


@endsection