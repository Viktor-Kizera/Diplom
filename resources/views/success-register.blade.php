@extends('parts.auth')

@section('content')

    <div class="container-movie">
        <section class="user__login_all">
            <div class="user__login__block reg-done">
                <div class="block__photo-user">
                    <img src="/images/user-photo.png" alt="User Photo">
                    <span class="bd-24">Вітаємо, {{ \Illuminate\Support\Facades\Auth::user()->name }}!</span>
                    <p class="bd-48">Ваш акаунт успішно зареєстровано</p>
                    <a href="/" class="bd-48" style="color: cornflowerblue; text-decoration: underline;">Повернутись на головну</a>
                </div>
            </div>
            <img class="img-bg-pipls img-p1" src="../images/deadpul.png">
            <img class="img-bg-pipls img-p2" src="../images/avatar-movie-bg.png">
        </section>
    </div>

@endsection
