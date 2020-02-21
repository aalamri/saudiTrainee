<h1>التسجيل</h1>
<form action="/registeration-form" method="get">
@csrf
    <div class="contact-form">
        <div class="form-group">
            <label class="field-label">الاسم</label>
            <input class="field-input" type="text" id="firstname" name="name">
        </div>
        <div class="form-group">
            <label class="field-label">الدرجة العلمية</label>
            <input class="field-input" type="text" id="dgree" name="dgree">
        </div>
        <div class="form-group">
            <label class="field-label">البريد الإلكتروني</label>
            <input class="field-input" type="text" id="email" name="email">
        </div>
        <div class="form-group">
            <label class="field-label">رقم الهاتف</label>
            <input class="field-input" type="text" id="phone" name="phone">
        </div>
        <button type="submit">ارسال</button>
    </div>
</form>