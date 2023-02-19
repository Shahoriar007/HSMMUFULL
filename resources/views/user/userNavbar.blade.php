   <!-- Start Header Top 
    ============================================= -->
   <div class="top-bar-area bg-dark text-light inline inc-border">
       <div class="container">
           <div class="row align-center">
               <div class="col-lg-12">
                   <marquee behavior="alternate" loop="infinite" direction="left" style="font-size: 30px; padding:5px 0px; color:red">
                       This site is underconstruction.
                   </marquee>
               </div>


               <div class="col-lg-7 col-md-12 left-info">
                   <div class="item-flex">
                       <ul class="list">
                           <li>
                               <i class="fas fa-phone"></i><a href="callto:+8801795122874">01795-122874</a>
                           </li>
                           <li>
                               <i class="fas fa-envelope"></i><a href="mailto:banasreeiqra@gmail.com">hsmmedu@gmail.com</a>
                           </li>
                       </ul>
                   </div>
               </div>

               <div class="col-lg-5 col-md-12 right-info">
                   <div class="item-flex">
                    <div class="login mr-3">
                        <li><a href="{{route('login')}}">Student/</a></li>
                        <li><a href="{{route('teacher.login')}}">Teacher</a></li>
                    </div>
                       <div class="social">
                           @php
                           $socialMedia = App\Models\Socialmedia::get();
                           @endphp
                           <ul>
                               @foreach($socialMedia as $item)
                               <li class="list-inline-item">
                                   <a href="{{$item->link}}" class="sbtn btn-large mx-1" title="Facebook">
                                       @if($item->name == "facebook")
                                       <i class="fab fa-facebook-f"></i>
                                       @elseif($item->name == "instagram")
                                       <i class="fab fa-instagram"></i>
                                       @elseif($item->name == "pinterest")
                                       <i class="fab fa-pinterest-p"></i>
                                       @elseif($item->name == "twitter")
                                       <i class="fab fa-twitter"></i>
                                       @elseif($item->name == "linkedin")
                                       <i class="fab fa-linkedin-in"></i>
                                       @endif
                                   </a>
                               </li>
                               @endforeach
                           </ul>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </div>
   <!-- End Header Top -->

   <!-- Header 
    ============================================= -->
   <header id="home">

       <!-- Start Navigation -->
       <nav class="navbar navbar-default attr-border navbar-sticky dark bootsnav header-back">
           <div class="container-full">
               <!-- Start Atribute Navigation -->
               <div class="attr-nav">
                   <form action="#">
                       <input type="text" placeholder="Search" class="form-control" name="text">
                       <button type="submit">
                           <i class="fa fa-search"></i>
                       </button>
                   </form>
               </div>
               <!-- End Atribute Navigation -->

               <!-- Start Header Navigation -->
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                       <i class="fa fa-bars"></i>
                   </button>
                   @php
                   $logo = App\Models\Logo::get()->last();
                   @endphp
                   <a class="navbar-brand" href="{{route('home')}}">
                       <img src="{{ url('photos/'.$logo->image) }}" class="logo" alt="Logo">
                   </a>

               </div>
               <!-- End Header Navigation -->

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse " id="navbar-menu">
                   <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                       @php
                       $navItems = App\Models\Navbar::all();
                       @endphp
                       @foreach($navItems as $nav)
                       @if($nav->status == "enable")
                       @if($nav->title == "Academics")
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics</a>
                           <ul class="dropdown-menu">
                               @php
                               $catagories = App\Models\Blogcatagory::all();
                               @endphp
                               @foreach($catagories as $catagory)
                               @if($catagory->status == "enable")
                               <li><a href="{{'/academic/blog/'.$catagory->id}}" class="site-nav">{{$catagory->catagoryName}}</a></li>
                               @endif
                               @endforeach

                           </ul>
                       </li>
                       @elseif($nav->title == "About")
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                           <ul class="dropdown-menu">
                               <li><a href="{{ route('ourTeam') }}">Our Honorable teachers</a></li>
                               <li><a href="{{ route('about') }}">About Us</a></li>
                               <li><a href="{{ route('aim') }}">Our Aim</a></li>
                               <li><a href="{{ route('management_message') }}">management message</a></li>

                           </ul>
                       </li>
                       @elseif($nav->title == "Media")
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media</a>
                           <ul class="dropdown-menu">
                               <li><a href="{{ route('gallery') }}">Gallery</a></li>
                               
                               <!-- <li><a href="magazine.html">magazine</a></li> -->
                           </ul>
                       </li>
                       @else
                       <li>
                           <a href="{{$nav->url}}">{{$nav->title}}</a>
                       </li>
                       @endif
                       @endif
                       @endforeach


                   </ul>

               </div>
               <!-- /.navbar-collapse -->
           </div>

       </nav>
       <!-- End Navigation -->

   </header>
   <!-- End Header -->