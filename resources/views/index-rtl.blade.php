<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
@include('includes.head')
</head>

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
                    <p>مرحبا في موقع المدربين السعوديين
                    </p>
                    <div class="element"></div>
                    <a href="#" class="custom-btn">عرض المزيد</a>
                    <div class="scroll-down"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HERO AREA END HERE -->
<div class="container">
     <form action="/search" method="get">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="search" class="form-control" name="search"
            placeholder="Search trainers"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
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
                            <img src="data:image/jpeg;base64,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" alt="Image" />
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

<!-- ABOUT AREA START HERE -->
<section class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="about-figure">
                    <div class="about-thumb">
                        <a href="#"><img src="images/profile.jpeg" alt="image">
                        </a>
                    </div>
                    <div class="about-social">
                        <ul>
                            <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="ln"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="be"><i class="fa fa-behance"></i></a>
                            </li>
                            <li><a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1">
                <div class="about-intro">
                    <h2 class="section-title">معلومات شخصية</h2>
                    <div class="persional-info">
                        <ul>
                            <li><strong class="head">اسم</strong> <span class="info">: عبد الكريم</span></li>
                            <li><strong class="head">تاريخ الولادة</strong> <span
                                    class="info">: 7 فبراير 1991</span></li>
                            <li><strong class="head">عنوان</strong> <span class="info">: 23 ، شارع كريم ، نيويورك الولايات المتحدة الأمريكية</span>
                            </li>
                            <li><strong class="head">جنسية</strong><span class="info">: العربية</span></li>
                            <li><strong class="head">البريد الإلكتروني</strong><span class="info"><a
                                    href="mailto:mpeter@gmail.com">: mpeter@gmail.com </a></span>
                            </li>
                            <li><strong class="head">هاتف</strong><span class="info"><a href="tel:+22425485">: +2 24
                                254 85</a></span>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="custom-btn">تحميل السيرة الذاتية<i class="fa fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT AREA END HERE -->



<!-- SKILL AREA END HERE -->

<!-- SERVICE AREA START HERE -->

<!-- PORTFOLIO AREA START HERE -->
<section class="portfolio-area section-padding" id="portfolio">
    <div class="section-intro">
        <h2 class="section-title">المدربين</h2>
    </div>
    <div class="portfolio-menu">
        <ul>
            <li class="active" data-filter="*"><a href="#">الكل</a>
            </li>
            <li data-filter=".ca1"><a href="#   ">الموارد البشرية</a>
            </li>
            <li data-filter=".ca2"><a href="#">تطوير الذات</a>
            </li>
            <li data-filter=".ca3"><a href="#">ادارة المشاريع</a>
            </li>
            <li data-filter=".ca4"><a href="#">إدارة مالية</a>
            </li>
        </ul>
    </div>
    <!-- PORT-FOLIO ITEM START HERE -->
    <div class="grid">
        <div class="grid-item ca1">
            <img src="images/p1.jpg" alt="Image">
            <div class="port-hover">
                <h4 class="title">عنوان المشروع</h4>
                <a href="#" data-toggle="modal" data-target="#myModal-1"><span class="point"><i class="fa fa-plus"></i></span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/p1.jpg" alt="Image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="demo-detals">
                                        <span class="date">التاريخ: 10 يناير 2016</span>
                                        <h3 class="project-heading">اسم المشروع: psd to wordpress</h3>
                                        <h5 class="الفئة">الفئة: تطوير الشبكة</h5>
                                        <p>عمله تحمل البيض واضحة جدا في هذا المشروع. فعل رائع لمشروعي.ال تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية

                                            </p>
                                        <p> ل تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية 6. </p>
                                        <a href="#" class="custom-btn">عرض حي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model End Here -->
        </div>
        <div class="grid-item grid-item--height2 ca2 ca3">
            <img src="images/p4.jpg" alt="Image">
            <div class="port-hover">
                <h4 class="title">عنوان المشروع</h4>
                <a href="#" data-toggle="modal" data-target="#myModal-4"><span class="point"><i class="fa fa-plus"></i></span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/p4.jpg" alt="Image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="demo-detals">
                                        <span class="date">التاريخ: 10 يناير 2016</span>
                                        <h3 class="project-heading">اسم المشروع: psd to wordpress</h3>
                                        <h5 class="الفئة">الفئة: تطوير الشبكة</h5>
                                        <p>عمله تحمل البيض واضحة جدا في هذا المشروع. فعل رائع لمشروعي.ال تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية

                                        </p>
                                        <p> ل تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية 6. </p>
                                        <a href="#" class="custom-btn">عرض حي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model End Here -->
        </div>
        <!-- Grid End Here -->
        <div class="grid-item ca2 ca1">
            <img src="images/p5.jpg" alt="Image">
            <div class="port-hover">
                <h4 class="title">عنوان المشروع</h4>
                <a href="#" data-toggle="modal" data-target="#myModal-5"><span class="point"><i class="fa fa-plus"></i></span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/p5.jpg" alt="Image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="demo-detals">
                                        <span class="date">التاريخ: 10 يناير 2016</span>
                                        <h3 class="project-heading">اسم المشروع: psd to wordpress</h3>
                                        <h5 class="الفئة">الفئة: تطوير الشبكة</h5>
                                        <p>عمله تحمل البيض واضحة جدا في هذا المشروع. فعل رائع لمشروعي.ال تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية

                                        </p>
                                        <p> ل تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية 6. </p>
                                        <a href="#" class="custom-btn">عرض حي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model End Here -->
        </div>
        <!-- Grid End Here -->
        <div class="grid-item ca3 ca4">
            <img src="images/p3.jpg" alt="Image">
            <div class="port-hover">
                <h4 class="title">عنوان المشروع</h4>
                <a href="#" data-toggle="modal" data-target="#myModal-3"><span class="point"><i class="fa fa-plus"></i></span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/p3.jpg" alt="Image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="demo-detals">
                                        <span class="date">التاريخ: 10 يناير 2016</span>
                                        <h3 class="project-heading">اسم المشروع: psd to wordpress</h3>
                                        <h5 class="الفئة">الفئة: تطوير الشبكة</h5>
                                        <p>عمله تحمل البيض واضحة جدا في هذا المشروع. فعل رائع لمشروعي.ال تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية

                                        </p>
                                        <p> ل تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية 6. </p>
                                        <a href="#" class="custom-btn">عرض حي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model End Here -->
        </div>
        <!-- Grid End Here -->
        <div class="grid-item ca3 ca1">
            <img src="images/p7.jpg" alt="Image">
            <div class="port-hover">
                <h4 class="title">عنوان المشروع</h4>
                <a href="#" data-toggle="modal" data-target="#myModal-7"><span class="point"><i class="fa fa-plus"></i></span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-7" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/p7.jpg" alt="Image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="demo-detals">
                                        <span class="date">التاريخ: 10 يناير 2016</span>
                                        <h3 class="project-heading">اسم المشروع: psd to wordpress</h3>
                                        <h5 class="الفئة">الفئة: تطوير الشبكة</h5>
                                        <p>عمله تحمل البيض واضحة جدا في هذا المشروع. فعل رائع لمشروعي.ال تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية

                                        </p>
                                        <p> ل تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية 6. </p>
                                        <a href="#" class="custom-btn">عرض حي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model End Here -->
        </div>
        <!-- Grid End Here -->
        <div class="grid-item ca2">
            <img src="images/p8.jpg" alt="Image">
            <div class="port-hover">
                <h4 class="title">عنوان المشروع</h4>
                <a href="#" data-toggle="modal" data-target="#myModal-8"><span class="point"><i class="fa fa-plus"></i></span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-8" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/p8.jpg" alt="Image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="demo-detals">
                                        <span class="date">التاريخ: 10 يناير 2016</span>
                                        <h3 class="project-heading">اسم المشروع: psd to wordpress</h3>
                                        <h5 class="الفئة">الفئة: تطوير الشبكة</h5>
                                        <p>عمله تحمل البيض واضحة جدا في هذا المشروع. فعل رائع لمشروعي.ال تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية

                                        </p>
                                        <p> ل تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية 6. </p>
                                        <a href="#" class="custom-btn">عرض حي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model End Here -->
        </div>
        <!-- Grid End Here -->
        <div class="grid-item ca1">
            <img src="images/p9.jpg" alt="Image">
            <div class="port-hover">
                <h4 class="title">عنوان المشروع</h4>
                <a href="#" data-toggle="modal" data-target="#myModal-9"><span class="point"><i class="fa fa-plus"></i></span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-9" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/p9.jpg" alt="Image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="demo-detals">
                                        <span class="date">التاريخ: 10 يناير 2016</span>
                                        <h3 class="project-heading">اسم المشروع: psd to wordpress</h3>
                                        <h5 class="الفئة">الفئة: تطوير الشبكة</h5>
                                        <p>عمله تحمل البيض واضحة جدا في هذا المشروع. فعل رائع لمشروعي.ال تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية

                                        </p>
                                        <p> ل تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية 6. </p>
                                        <a href="#" class="custom-btn">عرض حي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model End Here -->
        </div>
        <!-- Grid End Here -->
        <div class="grid-item ca1 ca4">
            <img src="images/p10.jpg" alt="Image">
            <div class="port-hover">
                <h4 class="title">عنوان المشروع</h4>
                <a href="#" data-toggle="modal" data-target="#myModal-10"><span class="point"><i class="fa fa-plus"></i></span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-10" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/p10.jpg" alt="Image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="demo-detals">
                                        <span class="date">التاريخ: 10 يناير 2016</span>
                                        <h3 class="project-heading">اسم المشروع: psd to wordpress</h3>
                                        <h5 class="الفئة">الفئة: تطوير الشبكة</h5>
                                        <p>عمله تحمل البيض واضحة جدا في هذا المشروع. فعل رائع لمشروعي.ال تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية

                                        </p>
                                        <p> ل تفاف هو قالب الصفحة المقصودة متعددة الأغراض نظيفة وأنيقة. سيكون مناسبًا تمامًا لـ Startup أو Web App أو أي نوع من خدمات الويب. لديها 4 أنماط الخلفية مع أنماط الصفحة الرئيسية 6. </p>
                                        <a href="#" class="custom-btn">عرض حي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model End Here -->
        </div>
    </div>
    <!-- Portfolio Item End Here -->
</section>
<!-- PORTFOLIO AREA END HERE -->

<!-- CHOOSE AREA START HERE -->

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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BRAND AREA END HERE -->

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
<script src="http://maps.googleapis.com/maps/api/js"></script>

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