@extends('masterAdmin')
@section('updateStudentInformation')


<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/shape/6.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Update student information</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Update student information</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<!-------Online Admission start-->
<div class="online-admission default-padding">
    <div class="container">
        <div class="row">
            <!--form part-->
            <div class="col-lg-9 mx-auto">
                <?php
                $student = App\Models\Onlineadmission::find($id);

                ?>
                <form method="POST" action="{{route('updateInfo')}}" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control form-light" placeholder="বাংলায়" value="{{$student->id}}">
                    @csrf
                    <!---student info-->
                    <div class="admission-form-part">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 form-group"> <!---------Required-->
                                        <label for="">শিক্ষার্থীর নাম (বাংলায়)</label>
                                        <input type="text" id="studentname_in_bangla" name="studentname_in_bangla" class="form-control form-light" placeholder="বাংলায়" value="{{$student->studentname_in_bangla}}">

                                        @error('studentname_in_bangla')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">Student's Name (in English)</label>
                                        <input type="text" id="studentname_in_english" name="studentname_in_english" class="form-control form-light" placeholder="in English" value="{{$student->studentname_in_english}}">

                                        @error('studentname_in_english')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">জন্ম তারিখ (ইংরেজিতে)</label>
                                        <input type="text" id="birthDate" name="birthDate" class="form-control form-light" placeholder="dd/mm/yyyy (in English)" value="{{$student->birthDate}}">

                                        @error('birthDate')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">বয়স (01, 01, <span>2022</span>)তারিখে</label>
                                        <div class="d-flex justify-content-around">
                                            <input type="text" id="ageYears" name="ageYears" class="form-control form-light mr-1" placeholder="in English" value="{{$student->ageYears}}">



                                            <div class="mr-4" style="line-height: 50px;">বছর</div>
                                            <input type="text" id="ageMonths" name="ageMonths" class="form-control form-light" placeholder="in English" value="{{$student->ageMonths}}">


                                            <div class="ml-1" style="line-height: 50px;">মাস</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">জন্মনিবন্ধন নাম্বার</label>
                                        <input type="text" id="birthReg" name="birthReg" class="form-control form-light" placeholder="in English" value="{{$student->birthReg}}">

                                        @error('birthReg')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">জাতীয়তা</label>
                                        <input type="text" id="nationality" name="nationality" class="form-control form-light" placeholder="in English" value="{{$student->nationality}}">

                                        @error('nationality')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">রক্তের গ্রুপ</label>

                                        @error('bloodGroup')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <select class="theme-combo home-charity" id="bloodGroup" name="bloodGroup" style="height: 40px">

                                            <option data-display="{{$student->bloodGroup}}">{{$student->bloodGroup}}</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="0+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="Ab+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>


                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">যে শ্রেণিতে পড়া সমাপ্ত করেছে</label>
                                        <input type="text" id="completed_class" name="completed_class" class="form-control form-light" value="{{$student->completed_class}}" placeholder="in English">

                                        @error('completed_class')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-8 form-group"><!---------Required-->
                                        <label for="">পূর্ব প্রতিষ্ঠানের নাম</label>
                                        <input type="text" id="pre_institution" name="pre_institution" value="{{$student->pre_institution}}" class="form-control form-light" placeholder="in English">

                                        @error('pre_institution')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">ভর্তি হতে ইচ্ছুক ( শ্রেণি )</label>
                                        <input type="text" id="seeking_admission_class" name="seeking_admission_class" value="{{$student->seeking_admission_class}}" class="form-control form-light" placeholder="in English ( Ex: Class 6 )">

                                        @error('seeking_admission_class')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 form-group"><!---------admin dashboard theke puron korbe-->
                                        <label for="">ভর্তি নেয়া হলো ( শ্রেণি )</label>
                                        <input type="text" id="admitted_class" name="admitted_class" value="{{$student->admitted_class}}" class="form-control form-light" placeholder="in English" readonly>
                                    </div>
                                    <div class="col-lg-4 form-group"><!---------admin dashboard theke puron korbe-->
                                        <label for="">শাখা</label>
                                        <input type="text" id="admitted_section" name="admitted_section" value="{{$student->admitted_section}}" class="form-control form-light" placeholder="in English" readonly>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-lg-10 form-light"><!---------Required-->
                                        <div><label for="admission_type" class="mr-2"><strong>ভর্তির ধরন ( টিক দিন
                                                    )</strong></label>
                                            @error('admission_type')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror


                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <select name="admission_type" id="admission_type">
                                                @if($student->admission_type == "hka")
                                                <option data-display="{{$student->admission_type}}">হিফয কাম একাডেমিক </option>
                                                @elseif($student->admission_type == "ac")
                                                <option data-display="{{$student->admission_type}}">একাডেমিক</option>
                                                @elseif($student->admission_type == "a")
                                                <option data-display="{{$student->admission_type}}">আবাসিক</option>
                                                @elseif($student->admission_type == "dc")
                                                <option data-display="{{$student->admission_type}}">ডে-কেয়ার</option>
                                                @elseif($student->admission_type == "oa")
                                                <option data-display="{{$student->admission_type}}">অনাবাসিক</option>
                                                @endif

                                                <option value="hka">হিফয কাম একাডেমিক</option>
                                                <option value="ac">একাডেমিক</option>
                                                <option value="a">আবাসিক</option>
                                                <option value="dc">ডে-কেয়ার</option>
                                                <option value="oa">অনাবাসিক</option>
                                            </select>
                                        </div>



                                        <div class="col-lg-2 form-group"><!---------admin dashboard theke puron korbe-->
                                            <label for="">রোল</label>
                                            <input type="text" id="roll" name="roll" class="form-control form-light" placeholder="in English" value="{{$student->roll}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <label for="">ভাই-বোনের নাম ( একের অধিক হলে কমা দিয়ে লিখুন )</label>
                                            <input type="text" id="siblingsName" name="siblingsName" class="form-control form-light" placeholder="in English" value="{{$student->siblingsName}}">
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <label for="">পিতার নাম (বাংলায়)</label><!---------Required-->
                                            <input type="text" id="fathername_in_bangla" name="fathername_in_bangla" class="form-control form-light" placeholder="বাংলায়" value="{{$student->fathername_in_bangla}}">

                                            @error('fathername_in_bangla')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">Fathers's Name (in English)</label>
                                            <input type="text" id="fathername_in_english" name="fathername_in_english" class="form-control form-light" placeholder="in English" value="{{$student->fathername_in_english}}">

                                            @error('fathername_in_english')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">পেশা</label>
                                            <input type="text" id="fatherOccupation" name="fatherOccupation" class="form-control form-light" placeholder="in English" value="{{$student->fatherOccupation}}">

                                            @error('fatherOccupation')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">শিক্ষাগত যোগ্যতা</label>
                                            <input type="text" id="father_edu_qua" name="father_edu_qua" class="form-control form-light" placeholder="in English" value="{{$student->father_edu_qua}}">

                                            @error('father_edu_qua')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">এন আই ডি নাম্বার</label>
                                            <input type="text" id="fatherNid" name="fatherNid" class="form-control form-light" placeholder="in English" value="{{$student->fatherNid}}">

                                            @error('fatherNid')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">মাতার নাম (বাংলায়)</label>
                                            <input type="text" id="mothername_in_bangla" name="mothername_in_bangla" value="{{$student->mothername_in_bangla}}" class="form-control form-light" placeholder="বাংলায়">

                                            @error('mothername_in_bangla')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">Mothers's Name (in English)</label>
                                            <input type="text" id="mothername_in_english" name="mothername_in_english" value="{{$student->mothername_in_english}}" class="form-control form-light" placeholder="in English">

                                            @error('mothername_in_english')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">পেশা</label>
                                            <input type="text" id="motherOccupation" name="motherOccupation" value="{{$student->motherOccupation}}" class="form-control form-light" placeholder="in English">

                                            @error('motherOccupation')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">শিক্ষাগত যোগ্যতা</label>
                                            <input type="text" id="mother_edu_qua" name="mother_edu_qua" value="{{$student->mother_edu_qua}}" class="form-control form-light" placeholder="in English">

                                            @error('mother_edu_qua')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">এন আই ডি নাম্বার</label>
                                            <input type="text" id="motherNid" name="motherNid" value="{{$student->motherNid}}" class="form-control form-light" placeholder="in English">

                                            @error('motherNid')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">অভিভাবকের মাসিক আয় ( টাকায় )</label>
                                            <input type="text" id="monthlyIncome_parents_in_number" value="{{$student->monthlyIncome_parents_in_number}}" name="monthlyIncome_parents_in_number" class="form-control form-light" placeholder="in English">

                                            @error('monthlyIncome_parents_in_number')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">অভিভাবকের মাসিক আয় ( কথায় )</label>
                                            <input type="text" id="monthlyIncome_parents_in_words" value="{{$student->monthlyIncome_parents_in_words}}" name="monthlyIncome_parents_in_words" class="form-control form-light" placeholder="in English">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-3 form-group"><!---------Required-->
                                            <label for="">ফোন নাম্বার ( পিতা )</label>
                                            <input type="text" id="phoneNumber_father" name="phoneNumber_father" value="{{$student->phoneNumber_father}}" class="form-control form-light" placeholder="in English">

                                            @error('phoneNumber_father')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3 form-group"><!---------Required-->
                                            <label for="">ফোন নাম্বার ( মাতা )</label>
                                            <input type="text" id="phoneNumber_mother" name="phoneNumber_mother" value="{{$student->phoneNumber_mother}}" class="form-control form-light" placeholder="in English">

                                            @error('phoneNumber_mother')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3 form-group"><!---------optional-->
                                            <label for="">ইমেইল আইডি, ( পিতা )</label>
                                            <input type="email" id="emailID_father" name="emailID_father" value="{{$student->emailID_father}}" class="form-control form-light" placeholder="in English">
                                        </div>
                                        <div class="col-lg-3 form-group"><!---------optional-->
                                            <label for="">ইমেইল আইডি, ( মাতা )</label>
                                            <input type="email" id="emailID_mother" name="emailID_mother" value="{{$student->emailID_mother}}" class="form-control form-light" placeholder="in English">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">হোয়াটসঅ্যাপ/এস এম এস সার্ভিস নাম্বার</label>
                                            <input type="text" id="whatsappNumb" name="whatsappNumb" value="{{$student->whatsappNumb}}" class="form-control form-light" placeholder="in English">
                                        </div>
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">ইমারজেন্সি নাম্বার ( বিকল্প )</label>
                                            <input type="text" id="emergencyNumb" name="emergencyNumb" value="{{$student->emergencyNumb}}" class="form-control form-light" placeholder="in English">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 form-group"><!---------Required-->
                                            <label for="">বর্তমান ঠিকানা</label>
                                            <input type="text" id="current_address" name="current_address" value="{{$student->current_address}}" class="form-control form-light" placeholder="in English">

                                            @error('current_address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 form-group"><!---------Required-->
                                            <label for="">স্থায়ী ঠিকানা</label>
                                            <input type="text" id="permanent_address" name="permanent_address" value="{{$student->permanent_address}}" class="form-control form-light" placeholder="in English">

                                            @error('permanent_address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 form-light"><!---------Required-->
                                            <div><label for="transport" class="mr-2"><strong>প্রতিষ্ঠানের পরিবহণ ব্যবস্থা ( টিক দিন )</strong></label>
                                            </div>

                                            @error('transport')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <select name="transport" id="transport">
                                                    @if($student->transport == "y")
                                                    <option data-display="{{$student->transport}}">প্রয়োজন আছে</option>
                                                    @elseif($student->transport == "n")
                                                    <option data-display="{{$student->transport}}">প্রয়োজন নেই</option>
                                                    @endif
                                                    <option value="y">প্রয়োজন আছে</option>
                                                    <option value="n">প্রয়োজন নেই</option>
                                                </select>
                                            </div>
                                            


                                        </div>

                                        <div class="form-group col-lg-6"><!---------Required-->
                                            <label for="" style="color:#000; font-weight:600">পাসপোর্ট সাইজ ছবি সংযুক্ত করুন </label>
                                            @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="file" id="photo" name="photo" class="form-light">
                                        </div>

                                        @php
                                        $value = \App\Models\formlabel::all();
                                        @endphp

                                        @foreach($value as $fields)

                                        @if($fields->labelName != null)
                                        <?php
                                        $fieldName = $fields->relatedField;

                                        ?>
                                        <div class="col-lg-12 form-group"><!---------Required-->
                                            <label for="">{{ $fields->labelName }}</label>
                                            <input type="text" id="{{ $fields->relatedField }}" name="{{ $fields->relatedField }}" value="{{$student->$fieldName}}" class="form-control form-light" placeholder="in English">
                                        </div>
                                        @endif

                                        @endforeach


                                    </div>
                                </div>
                            </div>
                            <!--student info-->
                        </div>
                        <!---verification info-->
                        <div class="admission-form-part mt-3" style="background-color: #009640;">
                            <div class="row">
                               
                                <div class="col-lg-12 text-center add-button">
                                    <input type="submit" class="bg-danger" value="Apply Now">
                                </div>
                            </div>
                            <!--verification info end-->
                        </div>
                </form>
            </div>
            <!--form part end-->
        </div>
    </div>
</div>
<!-------Online Admission end-->

@endsection