<x-guest-layout>
    <div class="login-box">
        <div class="login-logo">
            <b>رمزتو فراموش کردی</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">ایمیل خود را وارد کنید</p>

                <x-jet-validation-errors class="mb-4" />
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" :value="{{ old('email') }}" autofocus required placeholder="ایمیل">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">بازیابی رمز عبور</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-0">
                    <a href="{{ route('login') }}" class="text-center">بازگشت به صفحه ورود</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

</x-guest-layout>
