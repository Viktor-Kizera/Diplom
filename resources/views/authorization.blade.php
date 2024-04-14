@extends('parts.auth')

@section('content')
    <a class="back-to-home" href="/">
        <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.86012 18.2372L1.42689 9.79542M1.42689 9.79542L9.86865 1.36219M1.42689 9.79542L21.6769 9.80566" stroke="#EBFAFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
    <div class="container-movie">
        <div class="authorization__all">
            <div class="block__form-authorization">
                <h3 class="bd-72">Привіт</h3>
                <div class="block__btn-login-and-reg">
                    <p class="bd-24 login active">Вхід</p>
                    <p class="bd-24 reg">Реєстрація</p>
                </div>
                <div class="block__login active">
                    <form class="login" name="login" method="POST" action="/authorization/login">
                        {{ @csrf_field() }}
                        <div class="block__item__input">
                            <input id="email" required name="email" type="email" placeholder="E-mail" class="form-control" />
                            <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00022 3C3.00022 1.34315 4.34337 0 6.00022 0C7.65708 0 9.00022 1.34315 9.00022 3C9.00022 4.65685 7.65708 6 6.00022 6C4.34337 6 3.00022 4.65685 3.00022 3Z" fill="#EBFAFF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.501051 12.4036C0.552611 9.41038 2.99488 7 6.00022 7C9.00564 7 11.4479 9.41049 11.4994 12.4038C11.5028 12.6023 11.3884 12.784 11.208 12.8668C9.62203 13.5945 7.8579 14 6.00043 14C4.14279 14 2.37851 13.5945 0.792435 12.8666C0.611988 12.7838 0.497632 12.6021 0.501051 12.4036Z" fill="#EBFAFF"/>
                            </svg>
                        </div>
                        <div class="block__item__input">
                            <input id="password" name="password" type="password" required minlength="8" placeholder="Пароль" class="form-control" />
                            <div class="input-group-addon bnt__password" id="s-h-pass">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.35355 0.646447C2.15829 0.451184 1.84171 0.451184 1.64645 0.646447C1.45118 0.841709 1.45118 1.15829 1.64645 1.35355L13.6464 13.3536C13.8417 13.5488 14.1583 13.5488 14.3536 13.3536C14.5488 13.1583 14.5488 12.8417 14.3536 12.6464L2.35355 0.646447Z" fill="#EBFAFF"/>
                                    <path d="M15.1172 7.36887C14.7546 8.45913 14.1484 9.43832 13.3631 10.2418L11.2975 8.17615C11.4286 7.80857 11.5 7.41262 11.5 7C11.5 5.067 9.933 3.5 8 3.5C7.58738 3.5 7.19143 3.5714 6.82385 3.70253L5.17265 2.05133C6.04522 1.69587 6.99985 1.5 8.00035 1.5C11.3139 1.5 14.1243 3.64848 15.117 6.62697C15.1973 6.86768 15.1973 7.12812 15.1172 7.36887Z" fill="#EBFAFF"/>
                                    <path d="M10.5 7C10.5 7.12011 10.4915 7.23824 10.4752 7.35383L7.64617 4.52485C7.76176 4.50847 7.87989 4.5 8 4.5C9.38071 4.5 10.5 5.61929 10.5 7Z" fill="#EBFAFF"/>
                                    <path d="M8.35383 9.47515L5.52485 6.64617C5.50847 6.76176 5.5 6.87989 5.5 7C5.5 8.38071 6.61929 9.5 8 9.5C8.12011 9.5 8.23824 9.49153 8.35383 9.47515Z" fill="#EBFAFF"/>
                                    <path d="M4.5 7C4.5 6.58738 4.5714 6.19143 4.70253 5.82385L2.63662 3.75794C1.85124 4.56148 1.24498 5.54076 0.882274 6.63113C0.802188 6.87188 0.802265 7.13233 0.882492 7.37303C1.87522 10.3515 4.68565 12.5 7.99918 12.5C8.9998 12.5 9.95455 12.3041 10.8272 11.9485L9.17615 10.2975C8.80857 10.4286 8.41262 10.5 8 10.5C6.067 10.5 4.5 8.933 4.5 7Z" fill="#EBFAFF"/>
                                </svg>
                            </div>
                        </div>

                        @if($errors->any())
                            <ul style="margin-bottom: 20px;">
                                <li style="color: red; font-family: Arial;">Невірний email або пароль.</li>
                            </ul>
                        @endif

                        <button class="get-new-password">Забули пароль</button>
                        <button type="submit" class="btn-submit mm-16">Увійти</button>
                    </form>
                </div>
                <div class="block__reg">
                    <form class="reg" method="POST" name="reg" action="/authorization/register">
                        {{ @csrf_field() }}
                        <input type="text" placeholder="Імʼя" name="name" required minlength="4">
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" name="password" placeholder="Пароль" minlength="8">
                        <input type="password" name="password_confirmation" placeholder="Повторіть пароль" maxlength="255">

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li style="color: red;font-family: Arial;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <button type="submit" style="width: auto; padding: 5%;" class="btn-submit mm-16">Зареєструватись</button>
                    </form>
                </div>
            </div>
            <div class="block__right-img">
                <img src="../images/bg-login.png" alt="Backgroun Login">
            </div>
        </div>
    </div>

@endsection
