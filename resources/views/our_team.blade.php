@extends('master')
@section('ourTeam')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/shape/6.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our Honorable teachers</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Our Honorable teachers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!---teacher start-->
    <div class="teacher-part default-padding advisor-area">

        <!---honorable teacher start-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Honorable Teachers</h2>
                    </div>
                </div>
            </div>
            <div class="advisor-items text-center">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mx-auto single-item">
                        <div class="item">
                            <div class="thumb">

                                <img src="{{ url('upload/teacher_images/'.$principal[0]->photo) }}" alt="teacher">
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
                                <span>Principal</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    @if($assistantTeachers)
                    @foreach($assistantTeachers as $teacher)
                    <div class="col-lg-3 col-md-4 single-item">
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
                    @endforeach
                    @endif
                   
                </div>
            </div>
        </div>
        <!---honorable teacher start-->

        <!--Acadmic Teachers male-->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Academic Teachers (Male)</h2>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="row">
                @if($academic_male)
                    @foreach($academic_male as $teacher)
                    <div class="col-lg-3 col-md-4 single-item">
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
                    @endforeach
                    @endif
                   
                </div>
            </div>
        </div>
        <!--Acadmic Teachers male-->
        <!--Acadmic Teachers female-->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Academic Teachers (Female)</h2>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="row">
                @if($academic_female)
                    @foreach($academic_female as $teacher)
                    <div class="col-lg-3 col-md-4 single-item">
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
                    @endforeach
                    @endif
                    

                </div>
            </div>
        </div>
        <!--Acadmic Teachers female-->

        <!--Quran Teachers male-->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Quran Teachers (Male)</h2>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="row">
                    @if($quranic_male)
                    @foreach($quranic_male as $teacher)
                    <div class="col-lg-3 col-md-4 single-item">
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
                    @endforeach
                    @endif
                  
                </div>
            </div>
        </div>
        <!--Quran Teachers male-->

        <!--Quran Teachers female-->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Quran Teachers (Female)</h2>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="row">
                @if($quranic_female)
                    @foreach($quranic_female as $teacher)
                    <div class="col-lg-3 col-md-4 single-item">
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
                    @endforeach
                    @endif
                  

                </div>
            </div>
        </div>
        <!--Quran Teachers female-->
    </div>
    <!---teacher end-->

@endsection
