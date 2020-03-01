<!DOCTYPE html>
<html dir="rtl" lang="ar">

@include('includes.head')
<body>
<!-- START SITE PRELOADER -->
@include('includes.header')
<!-- HEADER AREA END HERE -->

<!-- HERO AREA START HERE -->
<div class="hero-area home-parallax" style="background-image: url('images/group.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-wrap text-center">
                    <p>مرحبا بك في موقع المدربين السعوديين
                    </p>
                    <br></br>
                    <div class="element"></div>
                    <!-- <a href="#" class="custom-btn">عرض المزيد</a> -->
                    <div class="scroll-down"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HERO AREA END HERE -->
<div class="container">
     <!-- BRAND AREA END HERE -->
<div id="brand" class="brand-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-intro">
                    <h2 class="section-title">شركائنا</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="brand-wrap">
                    <!-- SINGLE ITEM START -->
                    <div class="single-brand">
                        <a href="#"><img src="images/br2.png" alt="brand">
                        </a>
                    </div>
                    <!-- SINGLE ITEM START -->
                    <div class="single-brand">
                        <a href="#"><img src="images/br6.png" alt="brand">
                        </a>
                    </div>
                    <!-- SINGLE ITEM START -->
                    <div class="single-brand">
                        <a href="#"><img src="images/br1.png" alt="brand">
                        </a>
                    </div>
                    <!-- SINGLE ITEM START -->
                    <div class="single-brand">
                        <a href="#"><img src="images/br3.png" alt="brand">
                        </a>
                    </div>
                    <!-- SINGLE ITEM START -->
                    <div class="single-brand">
                        <a href="#"><img src="images/br4.png" alt="brand">
                        </a>
                    </div>
                    <!-- SINGLE ITEM START -->
                    <div class="single-brand">
                        <a href="#"><img src="images/br5.png" alt="brand">
                        </a>
                    </div>
                    <!-- SINGLE ITEM START -->
                    <div class="single-brand">
                        <a href="#"><img src="images/br2.png" alt="brand">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BRAND AREA END HERE -->

<!-- RESUME AREA END HERE -->
<section class="blog-area section-padding" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-intro">
                    <h2 class="section-title">المدربين</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid">
            @foreach($trainers as $trainer)
                <div class="col-md-4 blog-item col-sm-4 col-xs-12">
                    <article class="single-article">
                        <div class="blog-thumb">
                            <img src="{{$trainer->image}}" alt="Image" />
                        </div>
                        <div class="blog-details">
                            <div class="blog-txt">
                                <h4><a href="single-post.html">{{$trainer->nameAr}}</a></h4>
                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i>نشر بواسطة: <a href="single-post.html">مشرف</a></span>
                                    <span><i class="fa fa-calendar"></i>تاريخ: 16 Dec 2017</span>
                                </div>
                                <p>خلافا للاعتقاد الشائع ، لوريم إيبسوم ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي.</p>
                                <a href="{{ url('trainer-details/'.$trainer->id) }}" class="custom-btn">قراءة المزيد</a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach    
                </div> 
            </div>
        </div>
    </div>
</section>
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
                    <p>حقوق النشر © <a href="#">theme_village</a> جميع الحقوق محفوظة.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT AREA END HERE -->


<!--  JQuery v1.12.4
==============================================================-->
<script src="js/jquery-1.12.4.min.js"></script>

<!-- Bootstrap Js
==============================================================-->
<script src="js/bootstrap.min.js"></script>

<!-- Google Api Js
============================================================== -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Appear Js
==============================================================-->
<script src="js/jquery.appear.js"></script>

<!-- Easing Js
==============================================================-->
<script src="js/jquery.easing.1.3.js"></script>

<!-- Sticky Js
==============================================================-->
<script src="js/jquery.sticky.js"></script>

<!-- Knob Js
==============================================================-->
<script src="js/jquery.knob.js"></script>

<!-- Circle Js
==============================================================-->
<script src="js/progress-circle.js"></script>

<!-- Isotope Js
==============================================================-->
<script src="js/isotope.pkgd.min.js.js"></script>

<!-- Parallax Js
==============================================================-->
<script src="js/jquery.parallax-1.1.3.js"></script>

<!-- Typed Js
==============================================================-->
<script src="js/typed.js"></script>

<!-- Owl Js
==============================================================-->
<script src="js/owl.carousel.min.js"></script>

<!-- Waypoints Js
==============================================================-->
<script src="js/jquery.waypoints.min.js"></script>

<!-- CounterUp Js
==============================================================-->
<script src="js/jquery.counterup.min.js"></script>

<!-- Wow Js
==============================================================-->
<script src="js/wow.js"></script>

<!-- ScrollUp Js
==============================================================-->
<script src="js/jquery.scrollUp.min.js"></script>

<!-- Color Swicher Js
==============================================================-->
<script src="js/color-switcher.js"></script>

<!-- YT player Js
==============================================================-->
<script src="js/jquery.mb.YTPlayer.min.js"></script>

<!-- From Js
==============================================================-->
<script src="js/form.js"></script>

<!-- Theme Js
================================================================-->
<script src="js/main.js"></script>
<script src="js/rtl-main.js"></script>
</body>
</html>