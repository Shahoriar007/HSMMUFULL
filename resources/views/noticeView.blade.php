@extends('master')
@section('noticeView')    
    

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/shape/6.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                   @if($notice)
                   <h1>{{$notice->title}}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">{{$notice->title}}</li>
                    </ul>
                   @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star About Area
    ============================================= -->
    <div class="about-area default-padding">
        <!-- Fixed Shape -->
        <div class="fixed-shape-bottom">
            <img src="assets/img/shape/12.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container-full">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-box">
                    @if($notice)
                    <div class="site-heading text-center">
                            <h2>{{$notice->title}}</h2>
                        </div>
                        <div class="aim text-center" style="text-align: justify;">
                            {{$notice->description}}
                        </div>
                    @endif
                    </div>
                </div>

                <div class=" col-lg-4 col-md-9 ">
                    <!--prospectus start-->
                    <div class="d-flex justify-content-between ">
                        <div class="box-heading academic-file ">
                            <h2>Our Prospectus</h2>
                            <a href="assets/img/pdf/prospectus.pdf " target="_blank ">
                                <img src="assets/img/brochure1.png " class="img-responsive " alt="Prospectus ">
                                <p>View Prospectus</p>
                            </a>
                        </div>
                        <div class="box-heading academic-file ">
                            <h2>Our Calender</h2>
                            <a href="assets/img/pdf/calendar.pdf " target="_blank ">
                                <img src="assets/img/calender.png " class="img-responsive " alt="Prospectus ">
                                <p>View Calender</p>
                            </a>
                        </div>
                    </div>
                    <!--prospectus end-->

                    <div class="row ">
                        <!--Events sidebar start-->
                        <div class="col-lg-12 col-md-8 mx-auto ">
                            <div class="box-heading link-item ">
                                <h2>Top Magazine Post</h2>
                                <ul>
                                    <li>
                                        <a href="# ">We are now open Bangla Version from 2020</a>
                                    </li>
                                    <li>
                                        <a href="# ">We are now open Bangla Version from 2020</a>
                                    </li>
                                    <li>
                                        <a href="# ">We are now open Bangla Version from 2020</a>
                                    </li>
                                    <li>
                                        <a href="# ">We are now open Bangla Version from 2020</a>
                                    </li>
                                    <li>
                                        <a href="# ">We are now open Bangla Version from 2020</a>
                                    </li>
                                </ul>
                                <div class="see-all ">
                                    <a href="# ">See all news and events <i class="fas fa-arrow-right "></i></a>
                                </div>
                            </div>
                        </div>
                        <!--Events sidebar end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

@endsection