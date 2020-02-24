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
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBIQEhIVFRUVFRUQFRUVFRUVFRUVFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGC0dHR0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOMA3gMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAQMEBQYHAAj/xAA9EAABAwIEBAQEAwYEBwAAAAABAAIDBBEFEiExBkFRYSJxkaETMoHBB7HRI0JSYuHwFCRykhUzVGOCosL/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAQMCBP/EACARAQEAAgIDAQEBAQAAAAAAAAABAhEDMRIhUUEyE2H/2gAMAwEAAhEDEQA/ANYAjASBGAu0KEYCQIgFAoSgLwCIIPBLZeslCISy8lsvIpEhVTj/ABFBSN8Zu8/LGD4j+g7rnuLcZ1NTdgZkjOhbG67iO539FLlIsm3QKriOna/4YeHP2s0g2816biGBlviEtv1H6LC4PQhzbsuDzFyR9iFYuiYCIZrgHRpdfKezXdVjeW/Gk441seNQPbmZI13kdfRTY3g7LBt4bfE7PG4PG5bs4cwWnmnKkvjtMyRzCRqP3XHy5FWc31LxtyQgIWNpOMiPDIAXDl8jj5X0Psr7CuIIZyWi7XjUsdYH6cj9FrLKzssWRCBwTqAhVDRCAhOkISgYcE24J8ptyoZITTgn3JtzUEdwTbmqSQmi1BfgIwEgRBRRAIgkARBB4IgF4JUHglXkjjpdEKSslxHxcInmCEZpdurW+duaY464gMDPhtdaR43/AIB1WJwOQFxdfM8HMHdbC5aet9+t/Nc5ZfHcxSKqhfUSOkdcSEZhc3DuYt62+ij8NOaX2c3MDcFrhr30PT6rSumbJZ0ZF9TY7Hna+4IJ37rM4oyWKUzfCu1xu4aFp7tcNvNZdtOmlraFrLSwk33A38wP7KWnxpkzCx7fG35mOuM1ubL7+W4VXhvE0Lx8N7st+Umh9dj9VFxTCoZAZIp2g7gOIAv2dcAeqln1d/GpwrFoy3K2S9vlzaOH/bf9jzQ1uJRHwyWyu/e5X6O6HvsVzKskmjdmN8w0zA3BHcjdN/8AFHOFiTruO/b9E8NnkvuIqKSE3BzxO+U727drLPtr3tcHBxBGocPmH6qdSY85rPhPOeM7dWnseVv70UGQR31O/Nth7beiuPrtzldttw9x64AMnOY7B4/+hy81v6DE4ph4HtJ5gEEhcBljbfw5vqr/AIZe8OaWvcwg7hxHqNrLaVnY7SQgITOHyF7A4m/e1lIIVcmiEBTpQEIGXBAQnSEBCoZcE24J4pshBeBEEgCIIpQiCQIlAoRBCEoQKoOMVgiie8kANF9VPsuefipiBbGIRz1P6qW6iybrD4zVmomLzJqTpf28klPC+M+MEDk9v9N1Rhlja9up7q4w/FmsGUucSeVgR9RzWVlnTSLCkxFrHjM64JsXtIBBvo5w6jXpoeq00FUwt8djf95hvmHcNI1/uyyLq+OTQ05PdmnqDf8ANTaONp0Y17e+UZh2vzXNrqY1d1WAU0rbtNj/ADBzfUvNlmMVoXw3DXtI28NxoOrhZaKDDZifC91+Xgb/AFupT+EXPN3kl3WwH5Lnzd/5uZy578/zTTmOO4+q6dPwTZl+adfwaC0Hsr/rPh/j/wBcryHokFxuNPyXQ8Q4UytBCqajhxwZmsrOWVzeKsmXcj/RaPhuRgBDnWPK2qoquEsfYjRWGHubz9QbFabZadkwAn4Vj5jlurIrEcHY6b/Acc38N9/Lutu3Zdy7cWAcgKdKbcqhspshOkICqGnBNEJ5ybKC7ARBAEYRRBKEgRBQKEoSBKECrj34lPLql19mkDzNgbD6LsJXD+Oa1slXK4Hw3y69tDouclxZaQ8lc4Hgr5XAAKJgtGZpgBtddp4bwNrGtsFjyZa9Rtx4791msM4KsQXarV0PDzW8lqIqUdFMjpQs9fW21LSYS1vJS30g6K6ZAEj4Qu9M/JQT0otsmnUwAtZXslPdRZIFzY7lZqrpr6WUGtoBl2WmfAAVX18eizrtx/i/Cw27gNllg61iDquj8XAZSPNcvlNiR3W/Fdx5+WarR8P1P+YhIOuYX9V2phuAuB4I+08Z/mb6XXfIvlHkt8WFI5CUZQuC6Q25NlOuCbcgbcmnJ5wTZCC3CIFAEYRRhEEAKIICCUJAiCg84clwbjGj+HWzt/mLv92v3XeguLficLV8v+iO31ulI9+HdPmlJ6Lt2FxWaFyj8MaUCJ0p0u61z2W6m4ijYLfFjB6Z2j7rzZTdenH1GxDgEoqguX4nxFUO/wCSWHzkZ+qo28RYgHeKxHRskbz6NcSmr8Xc+u4CtCIVTVy3CuKXGzX3B53BHstEMUNrrnyXwjWvq2qHJVBYLGOJiwEC99h1usdV41iDrFjJuvyOsfZWXyLJi7HLUNJ3VfXOu0rksWOV7fna8fQq4i4leGi5sed7/dTLG/FxylQeKpD4u2i53O3Ulb3GakS3d13HdYObRzgtOP1GXL2mcPC9RCP52/mu/wAPyjyXD+BKXPWxaaC7j9B/Vdvidot4woigKMoCiBITZRlAVQBCbcnCgcEFqEoQhEEUQRBCEoQGEQQBEFATtlyr8SYYjVMkJ0JYyTsAef0XVVzXj7DP8zndq0sBPmDb7qZOsJ7ZWjpGy4g2IBwikLnMF/C5jQ4nIRpY5baLT1E4phcRhvRoABP39UuHwNEOGVB0EE/wXnazJ7x3J/1lnqtzPw0xxLg27urrn7rDPK1vxzW3MKziOryZm+BpNrAa9eapjUzSBz3EkXv4uYv+a6w7DpmG3+Ha6xuC0gLwwiV+r2NZ2HiJ8yUlnxbx3fbmDHvERljc5pZqddBbcWOgV3DFj7qYSMikcwtzNfkpw4ttcENPiOnZajFcDa4w0wAzVEgDgANIIvHM49iAG36vC6e0/segGgVmTm4+3zTFi1Q5uZ8rydtPBtvmygXPmoz6uaQOc3ZouSA0G3cgLZy4A11fVsAAGb47W8i2Qku/9w72Vj/wXILiJhB0IAAP05K+SeDm9NiQJylrietwde4IUpr2u2t5t8PqBzWoqMPja4n/AAz2noGD8woMOEXJd8N0d9AefoubnHU47O2Vr5pInANkIB1118+SXFKGNsUcod4nAXHJ1+YB1CtajDr1eUi4iYCemZ5NvYXVBicf7Zw7rWVllLGp/DaAZ5JOYGUfVdMp5Vy/gaXKZB5LoFJOu50zs1V4ChKCJ9wnCiGygcnHICVQBTbk4SgcgsgjCAIkUQRBClCAwiCAIggJZH8QqV7oc7NS3W3Vv73stao1fGC255flsuM+nfH/AFpk+FIY5qMRSNzMkjIc25HPkRqDcaEaiy2+G08zGhrakPaBYfHiD325AvY5l/Mi6yeAlou1ugDni3TxE/daeCXRYbemY+lg8z/xU/n+0HtcqurpJw0n4sDR2ie8+8gTk0wAVPWVpd4WC559kyy1FnGm8L4XZ8lTI90k0nhDnW8EQNxGxrRZoJ1PM6XJstTM60JHf7KvwulbEwC+Z1hmd1PO3QKbUPFrfVSFk36cz4hpXfFbMxxjmjcXNIAOaN1g+NzT8zTYG3UcldUcs5aCGQSabiR8Z/2ljreqb4twps5aWPyPYHFv83PKfQ+qhYNVXY2+lwDfqud2OrjKtX/G/wCl9JmfcKvqoqg/LTxN7vmJ9mMN/UK0ZKbblRaqssN1bUmN+sbV4d8EOLnZ5JHGSR1rAuOlmt5NAAAHZc/r3AzvPdbfH8Ru53YErBBtzm6m5WmHW2Ofeov+H3ZC89SFrqKq21WHpZbW9Ve0NStsemGf9N/Qy3CmhZ7Cai4V9G5dOROQlLdC5QCU2U4UDlRYhEEAKIIowiCAIkBhKEIRAoCQS3sbIkhUs2surtgo6n4U0rTp4s4HnurKLGw0XKi8dQhobM3Q5sjj1Dh+oCpYSXRkjUgLzcmOnq489ptfxPITkuCSbN01+q1vDgysBOpOpK5dg8jQ4Suu59zpbYDlrot7hmOtcw5hYjkPsuOq089qAfiFJT1kscjSWB7ozrrZpsHW62V5Lx/HYuuMtr3zBc84xhD6h727nxHz/sFZd+hstJhLGd5LL02WLccOllzMBAaTl1trte31W7FW2SnikGhMbT7C64nCy7gtpTY85kEbLXygtHkNlM8JOjDkt7aynx4G7SdQoeI4vusXV12Z3xG6OB1tz7EKxr3kMDuoB9Vx4uv9PSJjFR+zPVxy/Tmq2Ngy9ANT3Xq6q8Tbi9tbKHNUF3YdFvMXnuXdPsmubqzpJtlSMKnUrtVqyrcYNUbLV0smiwWFTWstfh81wq5XAQlIx6UooSgKMpsoLEIwU2CiBRRgoghCUKAwluhSoCXnJLpHFBmOMos9PIOYGYf+Ov2WPwStAcGnYj2W5x75SOy5c0/DmLDpYm3kdQuOTHcaceWq38GBU8lxYAOsbjf181AxHg2eI3p5iR/C/wAXfQ7qVw5Uk2HS3ote95ygheWXT1bcuq8DrbguER5XJI3+io8SwSdj7OjYSbG7XMcPY6LqWMV1mm7VgsRxFpfla3U+o17LXHKOr4We2fjopAdQ0e6uMO4ekmIzvys1vYW+l0/FICbFuqvMOvlL3aNGtlMs/jnWP4Yq8EghDAALHe+9rbrO47XCWSw0A9uQT/EWLkuvf6dOizjpbAuO5TDG91jnl+G6r5imwkv1RBeiMKUKZS7qIFMpBqqjQYebLUYbLssrRjZX1C/ZVy1MD0/dV1JIpociiKFKShJQTwUYTYRAopwFEE21GoDCUIAUQQFdI4pEjygosePhK5visGa7xu33B3C6Rjg8JWEt4pPL7qZdLj7qRwtiQDg0nsD16Lp2HPBFiVwqocY35m7Xv5FbDAOMNGtdyFvPVebLH9j0Y5fldNqMMY4agLK1XCMAcX21OvTmnWcUNI+b3TD+IA5pJO3vZTbQDsFjBHh2UHGXtY3LewGp+wTGI8StGx11HmsXjGNOlba+51UmNtc5ZyIVe/O9x76KMyEuaX8m+6Rt3WbzJ1VpJEGxOaOQW/TCTftTBGEARBaMxhT6IKA1WNEqVd0oVrTFVtIFZRKuV3RvVnG5UdI9WsL0WJV0JKTMkLkFgCjBTTUYKKcBRgpoFFdA4ClCbuiBUB3QuK8hcUFTi4u0rGxw+OTy+62uI6grNRReN/kpn/Ndcf8AUZHEqTUqse22rdCtliNJe6oKqlt1WGOTfPBEhmPUbWtzTsdU/Lbc7XJOn0UMxlt+vum5pTp15rrTM7NIbXvz5JhgFjommuOyfggubK9J2do4dcxUtwu1w7FEWWAanYolxb7ayemaRAqRW0hY49FGC3l289mjrFY0aro1Y0armr6jVlEqykKs4iqiZCVYwPVXGVMheqLNrkpUaORPB6irIFGE00owVFOBEEF0t0DiUIAUQKoK6F6UFTaTCXyanQKCiq23FlU/4XLcnmttWUgj8I6anmVm6xt3FYcnJ+N+LD9UlRFoqaenWjlYq+qhWUejW4zr6EKFPhwvmC0MkSiSNXW2fjFF/gQCpEEFlKdGlyK7TxR/h3KmMh0SRRqbGxc13Ir3UwJ1UaTAWuN9vJXTYtVPgp1JlZ0lxlZ2Pg572l0Trkbtd+qhSYfLC7LIwtPLofIrqvD1JoT1Ksa3C45RZ7QfNenDLc9vLnNXUcopSrOIrS1fBTN4iWnpuFUVGDzRfM246jULSMzTFIiKjNTkblRYMKea5Qo3qQ16KuGuTgKjtKdaVFPBEE0HJyJpcbAXKgMFTKGgfKfCNOvJT8MwO5Bf6LSRxBoytFgmxW0GDMZqdT3VqwC1ktkBNrqKpseg0zdNFjaoaldIqog9h7ixWFxOjLHlp+ncLDkx97bceX4opQokrdFYTsUR6zbyqyRqhSsVjO1QJQqIbkmVOFeCVHomqdDGmoIrq2paUrlUZsOqsIINlIjpFd4NhlyHkaDbuVccd3TjLLUTcPpckYHbXzUhrU9KOS8wL1a08tu3hGlMAOhCdARtCDPYjwxHJctGU9QsziGAzRa2zDqN/RdKAQviBV2mnJ2mxsU+Hrd4jgUcg2seo3WYrOHZmHw+Ie662mjjXJxpTVNE57g1ouStXhWCNZZz/E72ClVXYfhT5NT4W+60tBhzWCwH1UqNieCm10OMWRNQAogVFGheF669dEMB+Xy5/qo2I0TZW+4IUx4UV4LdW6jm39OiuhjMRwxzCQRpyPJUs9OQulF7H3B+oO/oqutwJj/lOU+oWOXH8bY8v1zmqYq2YFbyq4eeNgHeX9VVz4I7mw+hWdxsazKVkGQEnZT4qHRXsWFkfun0KmxYW8/uH0t+aatW5SKijoeyuIKVWdLg7udh7lW1PSsjF/crqcdZZckV1DhF7F2g6cyrV9m+EDXkOncrxqC7Rm38R2+g5pAAPuTuVtjjIxuVpstStC8SlaqhwIwgaiCBwJUAKK6DxCbc1OEoSUVWcNQNEQcBqdzzKvWheXla5h1qMJF5R0IJQvLyDxKVpSLyI85MvXl5URp4wdx+vqotFK4kgm4Gy8vIH5Ey5IvKAUoXl5AFU8taSNExRDOMztT3+w2Xl5BKJQry8g8vBKvIDCILy8gVGkXkCOQFeXkV/9k=" alt="" />
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                {{$trainer->nameAr}}
                            </h5>
                            <h6>
                                {{$trainer->trainingArea}}
                            </h6>
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
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                    </div>
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