@extends('masterAdmin')
@section('teacherApplicationsDetails')


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

                                                            <h4 class="nk-block-title">Teacher Application Information</h4>
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
                                                                <span class="data-label">Name</span>
                                                                <span class="data-value">{{ $detail->name }}</span>
                            
                                                                <span class="data-value text-success"></span> 
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Email</span>
                                                                <span class="data-value">{{ $detail->email }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Phone</span>
                                                                <span class="data-value text-soft">{{ $detail->phone }}</span>
                                                            </div>
                                                            <!-- <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div> -->
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Gender</span>
                                                                <span class="data-value ">{{ $detail->gender }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Photo</span>
                                                                <span class="data-value"><img src="{{ url('upload/teacher_images/').$detail->photo }}" alt=""></span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        <div class="nk-data data-list">

                                                        <div class="data-head">
                                                            <h6 class="overline-title">SSC Information</h6>
                                                        </div>
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">ssc year</span>
                                                                <span class="data-value">{{ $detail->ssc_year }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">ssc group</span>
                                                                <span class="data-value">{{ $detail->ssc_group }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">ssc gpa</span>
                                                                <span class="data-value">{{ $detail->ssc_gpa }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        </div>

                                                        <div class="nk-data data-list">

                                                        <div class="data-head">
                                                            <h6 class="overline-title">HSC Information</h6>
                                                        </div>
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">hsc year</span>
                                                                <span class="data-value">{{ $detail->hsc_year }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">hsc group</span>
                                                                <span class="data-value">{{ $detail->hsc_group }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">hsc gpa</span>
                                                                <span class="data-value">{{ $detail->hsc_gpa }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        </div>
                                                        <div class="nk-data data-list">

                                                        <div class="data-head">
                                                            <h6 class="overline-title">Graduation Information</h6>
                                                        </div>
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Graduation year</span>
                                                                <span class="data-value">{{ $detail->grad_year }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Department</span>
                                                                <span class="data-value">{{ $detail->grad_dept }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Major</span>
                                                                <span class="data-value">{{ $detail->major }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">cgpa</span>
                                                                <span class="data-value">{{ $detail->cgpa }}</span>
                                                            </div>
                                                             
                                                        </div><!-- data-item -->
                                                        </div>
                                                        
                                                    </div><!-- data-list -->
                                                    

                                                    
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Current Address</span>
                                                                <span class="data-value"> {{ $detail->address }}</span>
                                                            </div>
                                                           
                                                        </div><!-- data-item -->


                                                        @php 
                                                            $value = \App\Models\Teacherapplicationform::all();
                                                            $columnName = null;
                                                            $columnName = "field" . 1 ;
                                                        @endphp

                                                        @foreach($value as $fields)

                                                            @if($fields->lebelName != null)

                                                            <div class="data-item">
                                                                <div class="data-col">
                                                                    <span class="data-label">{{ $fields->lebelName }}</span>
                                                                    <span class="data-value"> {{ $detail->$columnName }}</span>
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
                                                                            <li><a href=""><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
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






