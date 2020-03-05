
<!DOCTYPE html>
<html dir="rtl" lang="ar">
@include('includes.head')


<body>

<!-- START SITE PRELOADER -->
@include('includes.header')

<h1>التسجيل</h1>
<div class="container emp-profile">
<form method="POST" enctype="multipart/form-data"  action="registeration-form">
@csrf
    <div class="contact-form">
        <div class="form-group">
            <label class="field-label">الاسم</label>
            <input class="field-input" type="text" id="nameAr" name="nameAr">
        </div>
        <div class="form-group">
            <label class="field-label">رقم الهاتف</label>
            <input class="field-input" type="text" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label class="field-label">البريد الإلكتروني</label>
            <input class="field-input" type="text" id="email" name="email">
        </div>
        <button type="submit">ارسال</button>
    </div>
</form>
</div>
@section('footer')
@endsection
</html>
