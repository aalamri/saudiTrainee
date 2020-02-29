<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- responsive viewport
    ==================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Favicon Icon
    ==================================================-->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Google Fonts
    ==================================================-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Ubuntu:500,700" rel="stylesheet">


    <!-- bootstrap css
    ==================================================================-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css')}}">

    <!-- FontAwesome css
    =====================================================================-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

    <!-- Owl-carousel css
    =====================================================================-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css')}}">

    <!-- Animate css
    =====================================================================-->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

    <!-- Color-switcher css
   =====================================================================-->
    <link rel="stylesheet" href="{{ asset('css/color-switcher.css')}}">

    <!-- style css
    ==================================================================== -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/rtl-style.css')}}">

    <!-- responsive css
    ===================================================================== -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="home"></div>
    <div class="container">
        @section('navbar')
        @show
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Image">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="activesmooth-menu"><a href="#home">الرئيسية <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="smooth-menu"><a href="#education">من نحن</a>
                                    </li>
                                    <li class="smooth-menu"><a href="#skill">التسجيل</a>
                                    </li>
                                    <li class="smooth-menu"><a href="#brand">شركائنا</a>
                                    </li>
                                    <li class="smooth-menu"><a href="#portfolio">المدربين</a>
                                    </li>
                                    <!-- <li class="smooth-menu"><a href="#blog">مدونة</a> -->
                                    <!-- </li> -->
                                    <li class="smooth-menu"><a href="#contact">اتصل</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </div>
                        <!-- container -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        @yield('main')
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
                        </div><div class="row">

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
    </div>
    <div class="footer">
        @yield('footer')
        @show
    </div>
</body>

</html>