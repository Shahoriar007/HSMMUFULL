@extends('masterAdmin')
@section('onlineApplicationsDetails')


<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">

            <a href="" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>


            <div class="nk-content-body">
                <div class="nk-block">

                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">

                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">

                                            <h4 class="nk-block-title">Online Application Information</h4>
                                            <div class="nk-block-des">
                                                <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Personal Information</h6>
                                        </div>
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Student Name (bangla)</span>
                                                <span class="data-value">{{ $adApplicationDetails->studentname_in_bangla }}</span>

                                                <span class="data-value text-success"></span>
                                            </div>

                                        </div><!-- data-item -->
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Student Name (eng)</span>
                                                <span class="data-value">{{ $adApplicationDetails->studentname_in_english }}</span>
                                            </div>

                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Date of Bitrh</span>
                                                <span class="data-value text-soft">{{ $adApplicationDetails->birthDate }}</span>
                                            </div>
                                            <!-- <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div> -->
                                        </div><!-- data-item -->
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Age</span>
                                                <span class="data-value ">{{ $adApplicationDetails->ageYears }} years {{ $adApplicationDetails->ageMonths }} monthes</span>
                                            </div>

                                        </div><!-- data-item -->
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Birth Reg No</span>
                                                <span class="data-value">{{ $adApplicationDetails->birthReg }}</span>
                                            </div>

                                        </div><!-- data-item -->
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Nationality</span>
                                                <span class="data-value">{{ $adApplicationDetails->nationality }}</span>
                                            </div>

                                        </div><!-- data-item -->

                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Blood Group</span>
                                                <span class="data-value">{{ $adApplicationDetails->bloodGroup }}</span>
                                            </div>

                                        </div><!-- data-item -->

                                    </div><!-- data-list -->
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Aceademic Information</h6>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Already Completed Class</span>
                                                <span class="data-value">{{ $adApplicationDetails->completed_class }} </span>
                                            </div>

                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Previous Institution</span>
                                                <span class="data-value">{{ $adApplicationDetails->pre_institution }}</span>
                                            </div>

                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Want to admitted in</span>
                                                <span class="data-value">{{ $adApplicationDetails->seeking_admission_class }}</span>
                                            </div>

                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">New Class</span>
                                                <span class="data-value">{{ $adApplicationDetails->admitted_class }}</span>
                                            </div>

                                        </div><!-- data-item -->

                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">New Section</span>
                                                <span class="data-value">{{ $adApplicationDetails->admitted_section }}</span>
                                            </div>

                                        </div><!-- data-item -->

                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">New Roll</span>
                                                <span class="data-value">{{ $adApplicationDetails->roll }}</span>
                                            </div>

                                        </div><!-- data-item -->

                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Admission Type</span>

                                                @if($adApplicationDetails->admission_type == "hka")
                                                <span class="data-value">হিফয কাম একাডেমিক</span>
                                                @elseif($adApplicationDetails->admission_type == "ac")
                                                <span class="data-value">একাডেমিক</span>
                                                @elseif($adApplicationDetails->admission_type == "a")
                                                <span class="data-value">আবাসিক</span>
                                                @elseif($adApplicationDetails->admission_type == "dc")
                                                <span class="data-value">ডে-কেয়ার</span>
                                                @elseif($adApplicationDetails->admission_type == "oa")
                                                <span class="data-value">অনাবাসিক</span>
                                                @endif

                                            </div>

                                        </div><!-- data-item -->
                                    </div><!-- data-list -->

                                    <div class="data-head">
                                        <h6 class="overline-title">Family Info</h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Siblings Name</span>
                                            <span class="data-value">{{ $adApplicationDetails->siblingsName }} </span>
                                        </div>

                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Father Name (bnagle)</span>
                                            <span class="data-value">{{ $adApplicationDetails->fathername_in_bangla }} </span>
                                        </div>

                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Father Name (eng)</span>
                                            <span class="data-value"> {{ $adApplicationDetails->fathername_in_english }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Father Occupation</span>
                                            <span class="data-value"> {{ $adApplicationDetails->fatherOccupation }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Father Education</span>
                                            <span class="data-value"> {{ $adApplicationDetails->father_edu_qua }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Father Nid</span>
                                            <span class="data-value"> {{ $adApplicationDetails->fatherNid }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Mother Name (bnagle)</span>
                                            <span class="data-value">{{ $adApplicationDetails->mothername_in_bangla }} </span>
                                        </div>

                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">mother Name (eng)</span>
                                            <span class="data-value"> {{ $adApplicationDetails->mothername_in_english }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">mother Occupation</span>
                                            <span class="data-value"> {{ $adApplicationDetails->motherOccupation }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">mother Education</span>
                                            <span class="data-value"> {{ $adApplicationDetails->mother_edu_qua }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">mother Nid</span>
                                            <span class="data-value"> {{ $adApplicationDetails->motherNid }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Parents Monthly Income (in numb)</span>
                                            <span class="data-value"> {{ $adApplicationDetails->monthlyIncome_parents_in_number }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Parents Monthly Income (in words)</span>
                                            <span class="data-value"> {{ $adApplicationDetails->monthlyIncome_parents_in_words }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Father Phone Number</span>
                                            <span class="data-value"> {{ $adApplicationDetails->phoneNumber_father }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Mother Phone Number</span>
                                            <span class="data-value"> {{ $adApplicationDetails->phoneNumber_mother }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Father's Email</span>
                                            <span class="data-value"> {{ $adApplicationDetails->emailID_father }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Mother's Email</span>
                                            <span class="data-value"> {{ $adApplicationDetails->emailID_mother }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Whatsapp Number</span>
                                            <span class="data-value"> {{ $adApplicationDetails->whatsappNumb }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Emergency Number</span>
                                            <span class="data-value"> {{ $adApplicationDetails->emergencyNumb }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Current Address</span>
                                            <span class="data-value"> {{ $adApplicationDetails->current_address }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Permanent Address</span>
                                            <span class="data-value"> {{ $adApplicationDetails->permanent_address }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Transport Needed? </span>

                                            @if($adApplicationDetails->transport == "y")
                                            <span class="data-value"> Yes </span>
                                            @else
                                            <span class="data-value"> No </span>
                                            @endif
                                        </div>

                                    </div><!-- data-item -->

                                    @php
                                    $value = \App\Models\formlabel::all();
                                    $columnName = null;
                                    $columnName = "field" . 1 ;
                                    @endphp

                                    @foreach($value as $fields)

                                    @if($fields->labelName != null)

                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">{{ $fields->labelName }}</span>
                                            <span class="data-value"> {{ $adApplicationDetails->$columnName }}</span>
                                        </div>

                                    </div><!-- data-item -->

                                    @endif

                                    @php
                                    $columnName = "field" . 1 + 1 ;
                                    @endphp

                                    @endforeach

                                </div><!-- .nk-block -->
                            </div>


                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary">
                                                <span></span>
                                            </div>



                                            <ul class="link-list-opt no-bdr">
                                                <!-- <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li> -->
                                                <li><a href="{{route('updateStudentInfo',['id' => $adApplicationDetails->id ])}}"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                            </ul>


                                            <div class="user-info">
                                                <span class="lead-text"></span>
                                                <span class="sub-text"></span>
                                            </div>
                                            <div class="user-action">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <!-- <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li> -->
                                                            <li><a href="{{route('updateStudentInfo',['id' => $adApplicationDetails->id ])}}"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .user-card -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="user-account-info py-0">
                                            <!-- <h6 class="overline-title-alt">Nio Wallet Account</h6>
                                                            <div class="user-balance">12.395769 <small class="currency currency-btc">BTC</small></div>
                                                            <div class="user-balance-sub">Locked <span>0.344939 <span class="currency currency-btc">BTC</span></span></div> -->
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner p-0">
                                        <ul class="link-list-menu">
                                            <li><a class="active" href="html/user-profile-regular.html"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                            <!-- <li><a href="html/user-profile-notification.html"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                                            <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                                            <li><a href="html/user-profile-setting.html"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                                            <li><a href="html/user-profile-social.html"><em class="icon ni ni-grid-add-fill-c"></em><span>Connected with Social</span></a></li> -->
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->


@endsection

<!-- User image -->
<!-- <img src="{{ (!empty($userDetails->photo))? url($userDetails->photo):url('upload/no_image.jpg') }}" width="140" height="150"> -->