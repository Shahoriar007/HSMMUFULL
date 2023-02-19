@extends('masterAdmin')
@section('teacherApplicationApprove')

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
                                               

                                                <form class="gy-3" method="POST" action="{{ route('teacher_application_approve', $teacherInfo->id) }}" >
                                                @csrf

                                                <input type="hidden" name="id" value="{{ $teacherInfo->id }}">
                                                <input type="hidden" name="name" value="{{ $teacherInfo->name }}">
                                                <input type="hidden" name="status" value="{{ $teacherInfo->status }}">
                                                

                                                <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name">Designation</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="designation" name="designation" value="{{ $teacherInfo->designation }}" placeholder="{{ $teacherInfo->designation }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                </div>
                                                <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name">Start Date</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="date" id="start_date" name="start_date" value="{{ $teacherInfo->start_date }}" placeholder="{{ $teacherInfo->start_date }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                </div>
                                                <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name">Teacher email</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="email" name="email" value="{{ $teacherInfo->email }}" placeholder="{{ $teacherInfo->email }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                </div>

                                                <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name"> Salary</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="salary" name="salary" value="{{ $teacherInfo->salary }}" placeholder="{{ $teacherInfo->salary }}" required>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                </div>

                                                <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="teacher_type" for="site-name"> Teacher Type</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="teacher_type" name="teacher_type" value="{{ $teacherInfo->type }}" placeholder="{{ $teacherInfo->type }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="subject" for="site-name"> Subject</label>
                                                                <span class="form-note">Specify the class you want to.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input class="form-control" type="text" id="subject" name="subject" value="{{ $teacherInfo->subject }}" placeholder="{{ $teacherInfo->subject }}" required>
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