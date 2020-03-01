<!DOCTYPE html>
<html dir="rtl" lang="ar">

@include('includes.head')
<!-- START SITE PRELOADER -->
<body>
@include('includes.header')
<!-- @foreach($trainers as $trainer)
<h3>الأسم</h3>
<p>{{$trainer->nameAr}}</p>
<h3>name</h3>
<p>{{$trainer->nameEn}}</p>
<h3>رقم الجوال</h3>
<p>{{$trainer->phone}}</p>
<p>{{$trainer->email}}</p>
@endforeach  -->
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ asset('' .$trainer->image) }}" alt="Image" />
                            <!-- <div class="file btn btn-lg btn-primary">
                                <input type="file" name="file" />
                            </div> -->
                        </div>
                        <br></br>
                        <br></br>

                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h2>
                                {{$trainer->nameAr}}
                            </h2>
                            <h3>
                                {{$trainer->trainingArea}}
                            </h3>
                            <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">

                            <div class="row">
                                <div class="col-md-6">
                                    <label>الاسم بالعربي</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$trainer->nameAr}}</p></br>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label>الأسم بالإنجليزي</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$trainer->nameEn}}</p></br>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label>رقم الهاتف</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$trainer->phone}}</p></br>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label>البريد الإلكتروني</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$trainer->email}}</p></br>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label>الدرجة العلمية</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$trainer->degree}}</p></br>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label>المدينة</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$trainer->city}}</p></br>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="about-social">
                        <ul>
                            <li><a href="{{$trainer->facebook}}" class="fb"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="{{$trainer->twitter}}" class="tw"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="{{$trainer->linkedIn}}" class="ln"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        </form>
    </div>
<div class="footer">
<!-- CONTACT AREA START HERE -->
<section class="contact-area" id="contact" style="background-image: url(images/ct.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-intro">
                    <h2 class="section-title">ابقى على تواصل</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div id="google-map"></div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="contact-form">
                    <div id="form-messages"></div>
                    <form id="ajax-contact" method="post" action="mailer.php">
                        <div class="form-group">
                            <label class="field-label" for="name">اسمك</label>
                            <input class="field-input" type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label class="field-label" for="email">بريدك الالكتروني</label>
                            <input class="field-input" type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="field-label" for="message">رسالة</label>
                            <textarea id="message" class="field-input" name="message" required></textarea>
                        </div>
                        <button type="submit">ارسال</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="copy-right text-center">
                    <p>حقوق النشر © <a href="//www.Appdev.sa/">Apps Dev</a> جميع الحقوق محفوظة.</p>
                </div>
            </div>
        </div>
    </div>
</section></div>
</section>
<!-- CONTACT AREA END HERE -->
</body>
</html>