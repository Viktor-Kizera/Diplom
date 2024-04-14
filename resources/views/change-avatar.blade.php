@extends('parts.auth')

@section('content')

    <a class="back-to-home" href="/home">
        <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.86012 18.2372L1.42689 9.79542M1.42689 9.79542L9.86865 1.36219M1.42689 9.79542L21.6769 9.80566" stroke="#EBFAFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
    <div class="container-movie">
        <section class="user__login_all">
            <div class="user__login__block reg-second-step">
                <div class="block__photo-user block__photo-user-avatar">
                    <p class="bd-48"><span>{{ \Illuminate\Support\Facades\Auth::user()->email }}</span></p>
                    @if (\Illuminate\Support\Facades\Auth::user()->avatar)
                        <img src="{{ \Illuminate\Support\Facades\Auth::user()->avatar }}" alt="">
                    @else
                        <img src="/images/user-photo.png" alt="">
                    @endif
                    <h6 class="bd-24">Виберіть аватар</h6>
                    <form method="POST" enctype="multipart/form-data" action="/home/avatar" class="block__avatar">
                        {{ csrf_field() }}
                        <button type="button" onclick="window.location.href = '/home/set-avatar/1'"><img src="../images/avatar1.png" alt="Avatar"></button>
                        <button type="button" onclick="window.location.href = '/home/set-avatar/2'"><img src="../images/avatar2.png" alt="Avatar"></button>
                        <button type="button" onclick="window.location.href = '/home/set-avatar/3'"><img src="../images/avatar3.png" alt="Avatar"></button>
                        <button type="button" onclick="window.location.href = '/home/set-avatar/4'"><img src="../images/avatar4.png" alt="Avatar"></button>
                        <button type="button" onclick="window.location.href = '/home/set-avatar/5'"><img src="../images/avatar5.png" alt="Avatar"></button>
                        <button type="button" onclick="window.location.href = '/home/set-avatar/6'"><img src="../images/avatar6.png" alt="Avatar"></button>
                        <button type="button" onclick="window.location.href = '/home/set-avatar/7'"><img src="../images/avatar7.png" alt="Avatar"></button>
                        <button type="button" onclick="window.location.href = '/home/set-avatar/8'"><img src="../images/avatar8.png" alt="Avatar"></button>
                        <button type="button" onclick="window.location.href = '/home/set-avatar/9'"><img src="../images/avatar9.png" alt="Avatar"></button>
                        <input name="image" accept="image/*" type="file">
                        <button><img src="../images/avatar10.png" alt="Avatar"></button>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.querySelector('input[type="file"]');
        const form = document.querySelector('.block__avatar');

        fileInput.addEventListener('change', function() {
            form.submit();
        });
    });
</script>
