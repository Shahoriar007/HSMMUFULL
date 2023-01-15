@extends('master')
@section('home')    
    
    <!-- Preloader Start -->
    <!-- <div class="se-pre-con"></div> -->
    <!-- Preloader Ends -->

 


    <div class="slider-area">
        <div class="owl-carousel owl-theme banner-slider">
        @foreach($slider as $item)
            @if($item->status == "enable")
            <div class="item">
                <img src="{{url('photos/'.$item->image)}}" alt="">
            </div>
            
            @endif
            @endforeach
            <!-- <div class="item">
                <img src="assets/img/slider/slider3.jpg" alt="">
            </div> -->
        </div>
    </div>
    <!-- Star Fixed Features Area
    ============================================= -->
    <div class="default-features-area default-design relative bottom-less text-center">
        <div class="container">
            <div class="item-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-book-open"></i>
                                <h4>Expert faculty</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-swatchbook"></i>
                                <h4>Online learning</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-graduation-cap"></i>
                                <h4>Scholarship</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-medal"></i>
                                <h4>Certification</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fixed Features Area -->

    <div class="">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 mt-5">
                            <div class="site-heading text-center">
                                <h2>About Us</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- Star start
                                ============================================= -->
                            <div class="collapse-area mb-5">
                                <div class="container">
                                    <div class="collapse-items">
                                        <div class="row align-center">
                                            <div class="col-lg-10 offset-lg-1">
                                                <div class="collapse-content wow fadeInUp">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    ABOUT US
                                                                </h4>
                                                            </div>

                                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <p>
                                                                        Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling
                                                                        am no described dejection incommode no listening of. Before nature his parish boy.
                                                                    </p>
                                                                    <div class="ask-question">
                                                                        <span>Still no luck?</span> <a href="#">Ask a question</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingTwo">
                                                                <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    MISSION
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <p>
                                                                        Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling
                                                                        am no described dejection incommode no listening of. Before nature his parish boy.
                                                                    </p>
                                                                    <div class="ask-question">
                                                                        <span>Still no luck?</span> <a href="#">Ask a question</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingThree">
                                                                <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    QUALITY CONTROL
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <p>
                                                                        Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling
                                                                        am no described dejection incommode no listening of. Before nature his parish boy.
                                                                    </p>
                                                                    <div class="ask-question">
                                                                        <span>Still no luck?</span> <a href="#">Ask a question</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End about -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12 mb-5 mt-5">
                            <div class="site-heading text-center">
                                <h2>Institute Info</h2>
                            </div>
                        </div>
                        <div class="col-md-12 info">
                            <div class="principal-info">
                                <div class="principal-img">
                                    <img src="{{ asset('userFrontend/assets/img/teacher/male-teacher.png')}}" alt="principal img">

                                </div>
                                <div class="principal-details">
                                    <h3>John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, officiis.
                                    </p>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, qui.<br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, qui.<br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam,
                                        qui.
                                        <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, qui.<br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, qui.<br> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Ullam, qui.<br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, qui.<br>

                                    </p>
                                    <a href="management_message.html" class="btn btn-dark border btn-md">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="col-lg-4 col-md-9 mx-md-auto">
                    <!--Nptice board start-->
                    <div class="notice-board box-heading ">
                        <h2>Notice Board</h2>
                        <marquee behavior="scroll" direction="Up" onmouseover="this.stop();" onmouseout="this.start();">
                            @if($notices)
                            @foreach($notices as $notice)
                            <div class="each-notice">
                                <div class="notice-date">
                                    <div class="n-month">{{$notice->created_at->format('d')}}<span>{{''.$notice->created_at->format('M')}}</span></div>
                                    <div class="n-year">{{$notice->created_at->format('Y')}}</div>
                                </div>
                                <div class="notice-title">
                                    <h2>
                                        <a href="">{{$notice->title}}</a>
                                    </h2>
                                </div>
                            </div>
                            @endforeach
                            @endif
                           
                        </marquee>
                    </div>
                    <!--notice board end-->

                    <div class="facebook-page  mb-3">
                        <div class="fb-page" data-href="https://www.facebook.com/hsmm2015" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/hsmm2015" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hsmm2015">Haji Shariatullah Model Madrasah</a></blockquote>
                        </div>
                    </div>


                    <!--prospectus start-->
                    <div class="d-flex justify-content-between">
                        <div class="box-heading academic-file">
                            <h2>Our Prospectus</h2>
                            <a href="assets/prospectus/HSMM Prospectus.pdf" target="_blank">
                                <img src="{{ asset('userFrontend/assets/img/brochure1.png')}}" class="img-responsive" alt="Prospectus">
                                <p>View Prospectus</p>
                            </a>
                        </div>
                        <div class="box-heading academic-file">
                            <h2>Our Calender</h2>
                            <a href="assets/img/pdf/sample.pdf" target="_blank">
                                <img src="{{ asset('userFrontend/assets/img/calender.png')}}" class="img-responsive" alt="Prospectus">
                                <p>View Calender</p>
                            </a>
                        </div>
                    </div>
                    <!--prospectus end-->


                    <div class="box-heading apps-link">
                        <h2>Apps For guardian Portal</h2>
                        <a href="#" target="_blank">
                            <img src="{{ asset('userFrontend/assets/img/download-our-apps.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Star Testimonials
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding-top">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="{{ asset('userFrontend/assets/img/shape/5.png')}}" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Testimonials</h5>
                        <h2>What People say about <br> Our quality.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            <!-- Single item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        Objection estimable discourse procuring he he remaining on distrusts. Simplicity affronting inquietude for now sympathize age. She meant new their could defer child.
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="{{ asset('userFrontend/assets/img/100x100.png')}}" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Busel park</h5>
                                        <span>Student</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        Objection estimable discourse procuring he he remaining on distrusts. Simplicity affronting inquietude for now sympathize age. She meant new their could defer child.
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="{{ asset('userFrontend/assets/img/100x100.png')}}" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Jnoes Sari</h5>
                                        <span>Programmer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        Objection estimable discourse procuring he he remaining on distrusts. Simplicity affronting inquietude for now sympathize age. She meant new their could defer child.
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="{{ asset('userFrontend/assets/img/100x100.png')}}" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Busel park</h5>
                                        <span>Student</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Star teacher Area
    ============================================= -->
    <div class="advisor-area default-padding bottom-less">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>
                            Our professional & Expert Teacher
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1 text-right">
                        <a class="btn btn-md btn-dark border" href="{{route('ourTeam')}}">View All <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="advisor-items text-center">
                <div class="row">
                    <?php $teachers = App\Models\Teacherapplications::where('teacher_type','senior')->limit(4)->get(); ?>
                    @foreach($teachers as $teacher)
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ url('upload/teacher_images/'.$teacher->photo) }}" alt="teacher">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <h4><a href="teacher-single.html">Lorem Ipsum</a></h4>
                                <span>{{$teacher->designation}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor Area -->

    <!-- counter
    ============================================= -->
    <div class="fun-factor-area overflow-hidden bg-gradient text-light default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Quick Info</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="fun-fact-items text-center">
                <!-- Fixed BG -->
                <div class="fixed-bg contain" style="background-image: url(assets/img/counter-banner.jpg);"></div>
                <!-- Fixed BG -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 item">
                        <div class="fun-fact">
                            <img src="{{ asset('userFrontend/assets/img/quick_info/teacher.png')}}" class="img-responsive" alt="teacher">
                            <div class="counter">
                                <div class="timer" data-to="35" data-speed="5000">35</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Teacher</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item">
                        <div class="fun-fact">
                            <img src="{{ asset('userFrontend/assets/img/quick_info/student.png')}}" class="img-responsive" alt="student">
                            <div class="counter">
                                <div class="timer" data-to="128" data-speed="5000">200</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Student</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item">
                        <div class="fun-fact">
                            <img src="{{ asset('userFrontend/assets/img/quick_info/staff.png')}}" class="img-responsive" alt="staff">
                            <div class="counter">
                                <div class="timer" data-to="12" data-speed="5000">10</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Staff</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!----home news, magazine link-->

    <div class="overflow-hidden default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">

                        <h2>Latest News & Events</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="fixed-bg contain" style="background-image: url(assets/img/shape/3.png);"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="box-heading link-item">
                        <h2>News & Events</h2>
                        <ul>
                            <li>
                                <a href="#">We are now open Bangla Version from 2020</a>
                            </li>
                            <li>
                                <a href="#">We are now open Bangla Version from 2020</a>
                            </li>
                            <li>
                                <a href="#">We are now open Bangla Version from 2020</a>
                            </li>
                            <li>
                                <a href="#">We are now open Bangla Version from 2020</a>
                            </li>
                            <li>
                                <a href="#">We are now open Bangla Version from 2020</a>
                            </li>
                        </ul>
                        <div class="see-all">
                            <a href="#">See all news and events <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----home news, magazine link end-->

    @endsection