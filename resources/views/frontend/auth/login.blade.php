<form method="post" action="{{ route('web.login') }}" autocomplete="off" class="sign-in-form">
    @csrf
    <div class="logobox">
        <h1 class="LogoWord">Silver Tringle </h1>
    </div>

    <div class="heading">
        <h2>مرحبًا-بعودتك</h2>
        <h6> لم يتم تسجيله بعد </h6>
        <a href="#" class="toggle-box" data-toggle="dropdown" aria-expanded="false">إنشاء حساب</a>
    </div>

    <div class="actual-form">
        <div class="input-wrap">
            <input id="email" type="email" name="email" minlength="4" class="input-field" autocomplete="off" required />
            <label>البريد الالكترونى</label>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-wrap">
            <input  id="password" type="password" minlength="4" name="password" class="input-field" autocomplete="off" required />
            <label>كلمة المرور</label>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="sign-btn">تسجيل الدخول</button>

        <p class="text">

            <a href="#"
                class="toggelBox main-btn rounded-btn icon-right small-size">
                احصل على مساعدة</a>
        </p>
    </div>
</form>